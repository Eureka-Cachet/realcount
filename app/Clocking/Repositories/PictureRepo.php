<?php
/**
 * Created by PhpStorm.
 * User: guru
 * Date: 1/27/18
 * Time: 11:07 AM
 */

namespace Clocking\Repositories;


use App\Beneficiary;
use App\Picture;
use Clocking\Repositories\Interfaces\IPictureRepo;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Storage;

class PictureRepo implements IPictureRepo
{
    const FOLDER = "beneficiaries/pictures/";
    /**
     * @var Picture
     */
    private $picture;

    /**
     * PictureRepo constructor.
     * @param Picture $picture
     */
    public function __construct(Picture $picture)
    {
        $this->picture = $picture;
    }


    /**
     * @param Beneficiary $beneficiary
     * @return Picture | null
     */
    public function getFor(Beneficiary $beneficiary)
    {
        return $beneficiary->picture;
    }

    /**
     * @param Beneficiary $beneficiary
     * @param array $inputs
     * @return bool
     */
    public function addFor(Beneficiary $beneficiary, array $inputs)
    {
        $path = $this->getPath($this->getFilename($beneficiary));
        $saved = $this->saveFile($beneficiary, $inputs);
        $picture = $saved && $beneficiary->picture()->create(['path' => $path]);
        return $saved && !!$picture;
    }

    /**
     * @param Beneficiary $beneficiary
     * @return bool
     */
    public function deleteFor(Beneficiary $beneficiary)
    {
        return $beneficiary->picture()->exists()
            ? $this->deleteFile($beneficiary) && $beneficiary->picture()->delete()
            : true;
    }

    /**
     * @param Beneficiary $beneficiary
     * @param array $inputs
     * @return bool
     */
    public function updateFor(Beneficiary $beneficiary, array $inputs)
    {
        $deleteFor = $this->deleteFor($beneficiary);
        return $deleteFor
            && $this->addFor($beneficiary, $inputs);
    }

    /**
     * @param Beneficiary $beneficiary
     * @param $data
     * @return bool
     */
    private function saveFile(Beneficiary $beneficiary, $data)
    {
        $filename = $this->getFilename($beneficiary);
        $file = base64_decode($data['encoded']);
        $path = $this->getPath($filename);
        return $this->getDisk()->put($path, $file);
    }

    /**
     * @param Beneficiary $beneficiary
     * @return bool
     */
    private function deleteFile(Beneficiary $beneficiary)
    {
        return $this->getDisk()->delete($beneficiary->picture->path);
    }

    /**
     * @return mixed
     */
    private function getDisk()
    {
        return App::environment('testing')
            ? Storage::disk('local')
            : Storage::disk('cloud');
    }

    /**
     * @param string $filename
     * @return string
     */
    private function getPath(string $filename)
    {
        return self::FOLDER . $filename . '.jpg';
    }

    /**
     * @param Beneficiary $beneficiary
     * @return string
     */
    private function getFilename(Beneficiary $beneficiary)
    {
        return str_slug($beneficiary->full_name)."_".$beneficiary->bid->code;
    }
}