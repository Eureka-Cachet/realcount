<?php

use App\Http\Controllers\ActionApiController;
use App\Http\Controllers\EntityApiController;
use App\Http\Controllers\GateApiController;
use Clocking\Helpers\Traits\TDBSeeder;
use Clocking\Repositories\Interfaces\IEntity;
use Illuminate\Database\Seeder;
use Ramsey\Uuid\Uuid;

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
        return collect($this->controllers())
            ->map(function($controller){
                return resolve($controller);
            })
            ->map(function(IEntity $controller){
                return $controller->getGateName();
            })->unique()
            ->map(function($gate){
                return [
                    'uuid' => Uuid::uuid4()->toString(),
                    'name' => $gate
                ];
            })
            ->toArray();
    }

    /**
     * @return array
     */
    private function controllers()
    {
        return [
            ActionApiController::class,
            EntityApiController::class,
            GateApiController::class
        ];
    }
}
