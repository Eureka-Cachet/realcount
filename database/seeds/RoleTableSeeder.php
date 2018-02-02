<?php

use Clocking\Helpers\Traits\TDBSeeder;
use Illuminate\Database\Seeder;

class RoleTableSeeder extends Seeder
{
    use TDBSeeder;
    const TABLE = 'roles';

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
            [
                'uuid' => \Ramsey\Uuid\Uuid::uuid4()->toString(),
                'name' => 'root',
                'level_type' => 'country',
                'level_id' => 1
            ]
        ];
    }
}
