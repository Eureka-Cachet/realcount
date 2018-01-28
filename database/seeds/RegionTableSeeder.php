<?php

use Clocking\Helpers\Traits\TDBSeeder;
use Illuminate\Database\Seeder;

class RegionTableSeeder extends Seeder
{
    use TDBSeeder;
    const TABLE = 'regions';

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
            ["code"=> "01","name"=>"WESTERN","country_id"=>1],
            ["code"=>"02","name"=>"CENTRAL","country_id"=>1],
            ["code"=>"03","name"=>"GREATER ACCRA","country_id"=>1],
            ["code"=>"04","name"=>"VOLTA","country_id"=>1],
            ["code"=>"05","name"=>"EASTERN","country_id"=>1],
            ["code"=>"06","name"=>"ASHANTI","country_id"=>1],
            ["code"=>"07","name"=>"BRONG AHAFO","country_id"=>1],
            ["code"=>"08","name"=>"NORTHERN","country_id"=>1],
            ["code"=>"09","name"=>"UPPER EAST","country_id"=>1],
            ["code"=>"10","name"=>"UPPER WEST","country_id"=>1]
        ];
    }
}
