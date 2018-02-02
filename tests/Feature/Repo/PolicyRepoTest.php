<?php

namespace Tests\Feature;

use App\Entity;
use App\Gate;
use App\Policy;
use Clocking\Repositories\Interfaces\IPolicyRepo;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;

class PolicyRepoTest extends TestCase
{
    use DatabaseTransactions;
    private $repo;

    protected function setUp()
    {
        parent::setUp();
        $this->repo = $this->app->make(IPolicyRepo::class);
    }

//    /** @test */
//    public function all()
//    {
//        factory(Policy::class, 5)->create();
//
//        $this->assertCount(5, $this->repo->all());
//    }
//
//    /** @test */
//    public function list()
//    {
//        $gate1 = factory(Gate::class)->create();
//        $gate2 = factory(Gate::class)->create();
//        $entity1 = factory(Entity::class)->create(['gate_id' => $gate1->id]);
//        $entity2 = factory(Entity::class)->create(['gate_id' => $gate2->id]);
//        factory(Policy::class, 2)->create(['entity_id' => $entity1->id]);
//        factory(Policy::class, 3)->create(['entity_id' => $entity2->id]);
//        //e|id -> entity
//        //g|id -> gate
//        $queryParams = [
//            'f' => 'e|2'
//        ];
//
//        $policies = $this->repo->list($queryParams);
//        $this->assertCount(3, $policies);
//
//        $queryParams = [
//            'f' => 'g|2'
//        ];
//
//        $policies = $this->repo->list($queryParams);
//        $this->assertCount(3, $policies);
//
//        $queryParams = [
//            'f' => 'g|5'
//        ];
//
//        $policies = $this->repo->list($queryParams);
//        $this->assertCount(0, $policies);
//    }

    /** @test */
    public function create()
    {
        $entity = factory(Entity::class)->create();
        $inputs = factory(Policy::class)->raw([
            'name' => 'Can view and edit beneficiary information',
            'entity_id' => $entity->id]);

        $policy = $this->repo->create($inputs);
        $this->assertEquals($entity->id, $policy->entity->id);
    }

    /** @test */
    public function single()
    {
        $inputs = factory(Policy::class)->raw();

        $policy = $this->repo->create($inputs);
        $policY = $this->repo->single($policy->uuid);
        $this->assertEquals($policy->id, $policY->id);
    }

    /** @test */
    public function update()
    {
        $inputs = factory(Policy::class)->raw();
        $update = ['name' => 'Can view and edit beneficiary information'];

        $policy = $this->repo->create($inputs);
        $updated = $this->repo->update($policy->uuid, $update);
        $this->assertTrue($updated);
    }

    /** @test */
    public function canDelete()
    {
        $inputs = factory(Policy::class)->raw();
        $policy = $this->repo->create($inputs);

        $deleted = $this->repo->delete($policy->uuid);
        $this->assertTrue($deleted);
    }
}
