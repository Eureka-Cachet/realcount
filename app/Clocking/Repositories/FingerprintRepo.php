<?php

namespace Clocking\Repositories;


use App\Beneficiary;
use App\Fingerprint;
use Clocking\Repositories\Interfaces\IFingerprintRepo;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Storage;

class FingerprintRepo implements IFingerprintRepo
{
    const FOLDER = "beneficiaries/fingerprints/";

    /**
     * @var Fingerprint
     */
    private $fingerprint;

    /**
     * FingerprintRepo constructor.
     * @param Fingerprint $fingerprint
     */
    public function __construct(Fingerprint $fingerprint)
    {
        $this->fingerprint = $fingerprint;
    }

    /**
     * @param Beneficiary $beneficiary
     * @return array
     */
    public function getFor(Beneficiary $beneficiary)
    {
        return $beneficiary->fingerprints()->get()->toArray();
    }

    /**
     * @param Beneficiary $beneficiary
     * @param array $inputs
     * @return array
     */
    public function addFor(Beneficiary $beneficiary, array $inputs)
    {
        $inputs = $this->saveFiles($beneficiary, $inputs);
        $fingers = $beneficiary->fingerprints()->createMany($inputs);
        return $fingers->toArray();
    }

    /**
     * @param Beneficiary $beneficiary
     * @return bool
     */
    public function deleteFor(Beneficiary $beneficiary)
    {
        return collect($beneficiary->fingerprints()->get())->isEmpty()
            ? true
            : $this->deleteFiles($beneficiary)
            && $beneficiary->fingerprints()->delete();
    }

    /**
     * @param Beneficiary $beneficiary
     * @param array $inputs
     * @return bool
     */
    public function updateFor(Beneficiary $beneficiary, array $inputs)
    {
        $deleted = $this->deleteFor($beneficiary);
        return $deleted
            && $this->addFor($beneficiary, $inputs);
    }

    /**
     * @param Beneficiary $beneficiary
     * @return bool
     */
    private function deleteFiles(Beneficiary $beneficiary)
    {
        $fingerprints = $beneficiary->fingerprints;
        return $this->doDeleteFiles($fingerprints);
    }

    /**
     * @param $beneficiary
     * @param $data
     * @return array
     */
    private function saveFiles(Beneficiary $beneficiary, $data)
    {
        $inputs = [];
        foreach ($data as $fingerPrint){
            $encoded = $fingerPrint['encoded'];
            $fingerType = $fingerPrint['finger'];
            $fileName = $this->makeFilename($beneficiary, $fingerType);
            $path = $this->makePath(self::FOLDER, $fileName);
            $this->saveFile($encoded, $path);

            array_push($inputs,
                [
                    'path' => $path,
                    'finger' => $fingerType,
                    'fmd' => $fingerPrint['fmd']
                ]
            );
        }

        return $data;
    }

    /**
     * @param $folder
     * @param $filename
     * @return string
     */
    private function makePath($folder, $filename)
    {
        return $folder.$filename.".jpg";
    }

    /**
     * @param $encoded
     * @param $path
     * @return bool
     */
    private function saveFile($encoded, $path)
    {
        $decoded = base64_decode($encoded);
        $saved = $this->getStorageDisk()->put($path, $decoded);
        return $saved;
    }

    /**
     * @param $beneficiary
     * @param $fingerType
     * @return string
     */
    private function makeFilename($beneficiary, $fingerType){
        return $beneficiary->full_name . "_" . $beneficiary->bid . "_" . $fingerType;
    }

    /**
     * @return mixed
     */
    private function getStorageDisk()
    {
        return App::environment('testing')
            ? Storage::disk('local')
            : Storage::disk('cloud');
    }

    /**
     * @param $fingerprints
     * @return bool
     */
    private function doDeleteFiles(array $fingerprints): bool
    {
        $deleted = false;
        foreach ($fingerprints as $fingerprint) {
            $deleted = $this->getStorageDisk()->exists($fingerprint->path)
                ? $this->getStorageDisk()->delete($fingerprint->path)
                : true;
        }
        return $deleted;
    }
}