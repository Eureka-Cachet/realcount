<?php

use App\Http\Controllers\ActionApiController;
use App\Http\Controllers\EntityApiController;
use App\Http\Controllers\GateApiController;
use Clocking\Helpers\Traits\TDBSeeder;
use Clocking\Repositories\Interfaces\IEntity;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Ramsey\Uuid\Uuid;

class EntityTableSeeder extends Seeder
{
    use TDBSeeder;
    const TABLE = 'entities';

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
            ->map(function($entities, $gate) use($table){
                $gate_id = DB::table("gates")->where('name', $gate)
                    ->first()->id;
                return collect($entities)->map(function($entity) use ($gate_id) {
                    return array_add($entity, "gate_id", $gate_id);
                })->all();
            })->each(function($entity) use($table){
                DB::table($table)->insert($entity);
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
            ->map(function(IEntity $controller){
                return [
                    "gate" => $controller->getGateName(),
                    "entity" => $controller->getName()
                ];
            })
            ->groupBy("gate")
            ->flatMap(function($entities, $gate){
                return [
                    $gate => collect($entities)
                        ->map(function($entity){
                            return [
                                'uuid' => Uuid::uuid4()->toString(),
                                'name' => $entity['entity']
                            ];
                        })
                        ->toArray()
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
