<?php
/**
 * Created by PhpStorm.
 * User: guru
 * Date: 1/27/18
 * Time: 10:30 AM
 */

namespace Clocking\Helpers\Traits;


use Illuminate\Support\Facades\Storage;
use Ramsey\Uuid\Uuid;

trait TReportOutput
{
    /**
     * @param array $data
     * @return string
     */
    private function getFileName(array $data)
    {
        $filename = collect($data)->get('filename');
        return $filename
            ? $this->sanitizeName($filename)
            : $this->getDefaultName($data['title']);
    }

    /**
     * @param string $title
     * @return string
     */
    private function getDefaultName(string $title)
    {
        $uuid = Uuid::uuid4()->toString();
        return $title . '_' . $uuid;
    }

    /**
     * @return mixed
     */
    private function getDisk()
    {
        return Storage::disk('local');
    }

    /**
     * @param $folder
     * @param $filename
     * @param $ext
     * @return string
     */
    private function getPath($folder, $filename, $ext)
    {
        return $folder. '/' . str_slug($filename) . '.' . $ext;
    }

    /**
     * @param $file
     * @param $path
     * @return bool
     */
    private function saveFile($file, $path)
    {
        return $this->getDisk()->put($path, $file);
    }

    /**
     * @param $filename
     * @return null|string|string[]
     */
    private function sanitizeName($filename)
    {
        return preg_replace("/[^a-zA-Z0-9\s]/", "", $filename);
    }
}