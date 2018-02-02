<?php

use App\Http\Controllers\ActionApiController;
use App\Http\Controllers\EntityApiController;
use App\Http\Controllers\GateApiController;
use Clocking\Helpers\Traits\TDBSeeder;
use Clocking\Repositories\Interfaces\IEntity;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Ramsey\Uuid\Uuid;

class ActionTableSeeder extends Seeder
{
    use TDBSeeder;
    const TABLE = 'actions';

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

    private function seed($table)
    {
        collect($this->data())
            ->map(function($actions, $entity) use($table){
                $entity_id = DB::table("entities")->where('name', $entity)
                    ->first()->id;
                return collect($actions)->map(function($action) use ($entity_id) {
                    return array_add($action, "entity_id", $entity_id);
                })->all();
            })->each(function($action) use($table){
                DB::table($table)->insert($action);
            });
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
            ->flatMap(function(IEntity $controller){
                return [$controller->getName() => $controller->getActions()];
            })
            ->flatMap(function($actions, $entity){
                return [
                    $entity => collect($actions)->map(function($action){
                        return [
                            'uuid' => Uuid::uuid4()->toString(),
                            'name' => $action
                        ];
                    })->toArray()
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
