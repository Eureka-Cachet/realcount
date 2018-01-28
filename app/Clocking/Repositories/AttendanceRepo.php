<?php

namespace Clocking\Repositories;

use App\Attendance;
use App\Beneficiary;
use Carbon\Carbon;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Collection;

class AttendanceRepo
{
    /**
     * @var Attendance
     */
    private $attendance;
    /**
     * @var BeneficiaryRepo
     */
    private $beneficiaryRepo;

    /**
     * AttendanceRepo constructor.
     * @param Attendance $attendance
     * @param BeneficiaryRepo $beneficiaryRepo
     */
    public function __construct(Attendance $attendance, BeneficiaryRepo $beneficiaryRepo)
    {
        $this->attendance = $attendance;
        $this->beneficiaryRepo = $beneficiaryRepo;
    }

    /**
     * @return array
     */
    public function all(): array
    {
        return $this->attendance->all()->toArray();
    }

    /**
     * @param array $queryParams
     * @return LengthAwarePaginator
     */
    public function list(array $queryParams): LengthAwarePaginator
    {
        $query = $this->attendance->with(
            'device');

        $query = collect($queryParams)->get('q')
            ? $this->performSearch($query, $queryParams['q'])
            : $query;

        $query = collect($queryParams)->get('f')
            ? $this->performFilter($query, $queryParams['f'])
            : $query;

        $query = array_has($queryParams, 's') && $queryParams['s']
            ? $this->performSort($query, $queryParams['s'])
            : $query;

        $perPage = collect($queryParams)->get('pp')
            ? (int)$queryParams['pp']
            : 10;

        $currentPage = collect($queryParams)->get('p')
            ? (int)$queryParams['p']
            : 1;

        return $query->paginate($perPage, ['*'], 'page', $currentPage);
    }

    /**
     * @param array $inputs
     * @return Attendance | null
     */
    public function add(array $inputs)
    {
        $attendance = null;

        $beneficiary = $this->beneficiaryRepo
            ->single($inputs['beneficiary_id'], 'bid');

        if(is_null($beneficiary)) return $attendance;

        $timestamp = $inputs['timestamp'];

        $clocks = $this->howManyClocksWithinTime($beneficiary, $timestamp);

        if($clocks >= 2){
            return $beneficiary->attendances()->orderByDesc('time')->first();
        }

        $data = $this->prepareData($beneficiary, $inputs);

        if($clocks == 1){
            $data = array_merge($data, ['clock_in' => false]);
            $attendance = $this->attendance->create($data);
        }

        if($clocks < 1){
            $data = array_merge($data, ['clock_in' => true]);
            $attendance = $this->attendance->create($data);
        }

        return $attendance;
    }


    /**
     * @param string $beneficiaryId
     * @param array $queryParams | null
     * @return array
     */
    public function for(string $beneficiaryId, array $queryParams = null): array
    {
        list($startDate, $endDate) = $this->getDateRange($queryParams);
        $beneficiary = $this->beneficiaryRepo->single($beneficiaryId);

        return $beneficiary->attendances()
            ->where('date', '>=', $startDate)
            ->where('date', '<=', $endDate)
            ->get()
            ->groupBy('date')
            ->map(function(Collection $attendances, $date){
                $in = $attendances->shift();
                $inTime = $in
                    ? $in->time
                    : null;
                $out = $attendances->pop();
                $outTime = $out
                    ? $out->time
                    : null;
                return [
                    'date' => Carbon::parse($date)->toFormattedDateString(),
                    'in' => $inTime
                        ? Carbon::parse($inTime)->toTimeString()
                        : "-",
                    'out' => $outTime
                        ? Carbon::parse($outTime)->toTimeString()
                        : "-"
                ];
            })->toArray();
    }

    /**
     * @param string $id
     * @param array $inputs
     * @return Attendance
     */
    public function update(string $id, array $inputs): Attendance
    {
//        $data = $this->prepareData()
    }

    /**
     * @param string $id
     * @return bool
     */
    public function delete(string $id): bool
    {
        return $this->attendance
            ->where(['uuid' => $id])
            ->delete();
    }

    /**
     * @param Builder $query
     * @param string $sort
     * @return Builder
     */
    private function performSort(Builder $query, string $sort): Builder
    {
        //name -> n|asc, n|desc
        list($column, $direction) = explode("|", $sort);
        $column = $this->formatColumn($column);
        return $query->whereHas($column, function(Builder $q) use($direction){
            $q->orderBy('full_name', $direction);
        });
    }

    /**
     * @param Builder $query
     * @param string $filter
     * @return Builder
     */
    private function performFilter(Builder $query, string $filter): Builder
    {
        //region -> a|r:id
        //district -> a|d:id
        //time|date range -> dr|start:end
        //all -> a|(r:id,d:id,l:id),dr|start:end
        $filters = collect(explode(",", $filter))
            ->map(function($el){
                list($column, $value) = explode("|", $el);
                $column = $this->formatColumn($column);
                return [
                    'column' => $column,
                    'value' => $value
                ];
            })
            ->flatMap(function($el){
                $column = $this->formatColumn($el['column']);
                return [ $column => explode(":", $el['value'])];
            });

        $area = $filters->get('a');
        $query = $area
            ? $this->performAreaFilter($query, $area)
            : $query;

        $dateRange = $filters->get('timestamp');
        $query = $dateRange
            ? $this->performDateRangeFilter($query, $dateRange)
            : $query;

        return $query;
    }

    /**
     * @param Beneficiary $beneficiary
     * @param $timestamp
     * @return int
     */
    private function howManyClocksWithinTime(Beneficiary $beneficiary, $timestamp): int
    {
        $start = Carbon::createFromTimestamp($timestamp)->startOfDay();
        $end = Carbon::createFromTimestamp($timestamp)->endOfDay();

        return $beneficiary->attendances()
            ->where('date', '>=', $start)
            ->where('date', '<=', $end)
            ->count();
    }

    /**
     * @param Beneficiary $beneficiary
     * @param array $inputs
     * @return array
     */
    private function prepareData(Beneficiary $beneficiary, array $inputs): array
    {
        $timestampString = $inputs['timestamp'];
        $timestamp = Carbon::createFromTimestamp($timestampString);
        $date = Carbon::createFromTimestamp($timestampString)->startOfDay();
        return [
            'time' => $timestamp,
            'date' => $date,
            'beneficiary_id' => $beneficiary->id,
            'device_id' => $inputs['device_id']
        ];
    }

    /**
     * @param string $column
     * @return string
     */
    private function formatColumn(string $column): string
    {
        if($column == "r") $column = "device.branch.district.region";
        if($column == "d") $column = "device.branch.district";
        if($column == "dr") $column = "timestamp";
        if($column == "n") $column = "beneficiary";
        if($column == "c") $column = "clocks";
        return $column;
    }

    /**
     * @param Builder $query
     * @param $dateRange
     * @return Builder
     */
    private function performDateRangeFilter(Builder $query, $dateRange): Builder
    {
        list($start, $end) = $dateRange;
        return $query->where('date', '>=', Carbon::createFromTimestamp($start)->startOfDay())
            ->where('date', '<=', Carbon::createFromTimestamp($end)->endOfDay());
    }

    /**
     * @param Builder $query
     * @param $area
     * @return Builder
     */
    private function performAreaFilter(Builder $query, $area): Builder
    {
        list($areaColumn, $areaId) = $area;
        $areaColumn = $this->formatColumn($areaColumn);
        return $query->whereHas($areaColumn, function(Builder $q) use($areaId){
            $q->where('id', $areaId);
        });
    }

    /**
     * @param $queryParams
     * @return array
     */
    private function getDateRange($queryParams)
    {
        $queryParams = collect($queryParams);
        $start = $queryParams->get('start');
        $end = $queryParams->get('end');

        if($start && $end) return [
            Carbon::createFromTimestamp($start),
            Carbon::createFromTimestamp($end)
        ];

        $duration = $queryParams->get('duration');
        if($duration == 'daily') return [now()->startOfDay(), now()->endOfDay()];
        return [now()->startOfWeek(), now()->endOfWeek()];
    }

    /**
     * @param Builder $query
     * @param string $searchQuery
     * @return Builder
     */
    private function performSearch(Builder $query, string $searchQuery): Builder
    {
        return $query->whereHas('beneficiary', function(Builder $q) use ($searchQuery) {
            $q->where('bid', $searchQuery);
        });
    }
}