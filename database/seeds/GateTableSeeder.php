<?php

use Clocking\Helpers\Traits\TDBSeeder;
use Illuminate\Database\Seeder;

class GateTableSeeder extends Seeder
{
    use TDBSeeder;
    const TABLE = 'gates';

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

        ];
    }
}
