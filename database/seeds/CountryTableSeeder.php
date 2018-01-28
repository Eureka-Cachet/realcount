<?php

use Clocking\Helpers\Traits\TDBSeeder;
use Illuminate\Database\Seeder;

class CountryTableSeeder extends Seeder
{
    use TDBSeeder;
    const TABLE = 'countries';

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->truncate(self::TABLE);
        $this->seed(self::TABLE);
    }

    /**
     * @return array
     */
    private function data()
    {
        return [
            ['name' => 'Ghana']
        ];
    }
}
