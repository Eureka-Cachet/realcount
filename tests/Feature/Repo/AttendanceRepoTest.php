<?php

namespace Tests\Feature;

use App\Attendance;
use App\Beneficiary;
use App\Device;
use Carbon\Carbon;
use Clocking\Repositories\Interfaces\IAttendanceRepo;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;

class AttendanceRepoTest extends TestCase
{
    use DatabaseTransactions;

    private $repo;

    protected function setUp()
    {
        parent::setUp();
        $this->repo = $this->app->make(IAttendanceRepo::class);
    }

    /** @test */
    public function add()
    {
        $inputs = $this->getInputs();
        $attendance = $this->repo->add($inputs);
        $this->assertNotNull($attendance);
    }

    /** @test */
    public function for()
    {
        $inputs = $this->getInputs();
        $attendance = $this->repo->add($inputs);

        $attendance2 = $this->repo->for($attendance->beneficiary->uuid);
        $this->assertEmpty($attendance2);

        $dateRange = [
            'start' => Carbon::createFromTimestamp(1515369600)->startOfWeek()->timestamp,
            'end' => Carbon::createFromTimestamp(1515369600)->endOfWeek()->timestamp
        ];
        $attendance = $this->repo->for($attendance->beneficiary->uuid, $dateRange);
        $this->assertCount(1, $attendance);
    }

    /** @test */
    public function list()
    {
        $attendances = factory(Attendance::class, 5)->create();

        $queryParams = [];
        $result = $this->repo->list($queryParams);
        $this->assertEquals(5, $result->total());

        $queryParams = ['q' => $attendances[0]->beneficiary->full_name];
        $result = $this->repo->list($queryParams);
        $this->assertEquals(1, $result->total());

        $start = Carbon::createFromTimestamp(1515369600)->startOfWeek()->timestamp;
        $end = Carbon::createFromTimestamp(1515369600)->endOfWeek()->timestamp;
        $queryParams = ['f' => "dr|{$start}:{$end}"];
        $result = $this->repo->list($queryParams);
        $this->assertEquals(5, $result->total());
    }

    /**
     * @return array
     */
    private function getInputs(): array
    {
        $beneficiary = factory(Beneficiary::class)->create();
        $device = factory(Device::class)->create();
        $inputs = [
            'beneficiary_bid' => $beneficiary->bid->code,
            'timestamp' => Carbon::createFromTimestamp(1515369600)
                ->addHours(5)
                ->addMinutes(2)
                ->addSeconds(20)
                ->timestamp,
            'device_id' => $device->id
        ];
        return $inputs;
    }
}
