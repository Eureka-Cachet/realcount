<?php
/**
 * Created by PhpStorm.
 * User: guru
 * Date: 1/28/18
 * Time: 8:24 PM
 */

namespace Clocking\Helpers\Traits;


use Illuminate\Support\Facades\DB;

trait TDBSeeder
{
    private function truncate($table)
    {
        DB::table($table)->truncate();
    }

    private function seed($table)
    {
        collect($this->data())->each(function($row) use ($table) {
            DB::table($table)->insert($row);
        });
    }
}