<?php

namespace Tests\Feature;

use App\Policy;
use Clocking\Repositories\Interfaces\IRoleRepo;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;

class RoleRepoTest extends TestCase
{
    use DatabaseTransactions;

    private $repo;

    protected function setUp()
    {
        parent::setUp();

        $this->repo = $this->app->make(IRoleRepo::class);
    }

//    /** @test */
//    public function all()
//    {
//        $gates = [3, 2];
//        $policies = [factory(Policy::class)->create()->id];
//        $inputs = [
//            'gates' => $gates,
//            'policies' => $policies,
//            'name' => 'Admin',
//            'level_type' => 'country',
//            'level_id' => 1
//        ];
//        $this->repo->create($inputs);
//
//        $this->assertCount(1, $this->repo->all());
//    }

//    /** @test */
//    public function list()
//    {
//        $gates = [3, 2];
//        $policies = [factory(Policy::class)->create()->id];
//        $inputs = [
//            'gates' => $gates,
//            'policies' => $policies,
//            'name' => 'Admin',
//            'level_type' => 'country',
//            'level_id' => 1
//        ];
//        $this->repo->create($inputs);
//
//        $queryParams = [];
//        $list = $this->repo->list($queryParams);
//
//        $this->assertCount(1, $list);
//    }

    /** @test */
    public function create()
    {
        $gates = [3, 2];
        $policies = [factory(Policy::class)->create()->id];
        $inputs = [
            'gates' => $gates,
            'policies' => $policies,
            'name' => 'Admin',
            'level_type' => 'country',
            'level_id' => 1
        ];
        $role = $this->repo->create($inputs);
        $this->assertEquals('Admin', $role->name);
    }

    /** @test */
    public function single()
    {
        $gates = [3, 2];
        $policies = [factory(Policy::class)->create()->id];
        $inputs = [
            'gates' => $gates,
            'policies' => $policies,
            'name' => 'Admin',
            'level_type' => 'country',
            'level_id' => 1
        ];
        $role = $this->repo->create($inputs);

        $rolE = $this->repo->single($role->uuid);
        $this->assertEquals($role->name, $rolE->name);
    }

    /** @test */
    public function update()
    {
        $gates = [3, 2];
        $policies = [factory(Policy::class)->create()->id];
        $inputs = [
            'gates' => $gates,
            'policies' => $policies,
            'name' => 'Admin',
            'level_type' => 'country',
            'level_id' => 1
        ];
        $role = $this->repo->create($inputs);

        $policies = array_merge($policies, [factory(Policy::class)->create(['name' => 'new policy'])->id]);

        $updated = $this->repo->update($role->uuid, ['policies' => $policies]);

        $this->assertTrue($updated);
        $this->assertEquals(2, $role->policies()->count());
    }

    /** @test */
    public function canDelete()
    {
        $gates = [3, 2];
        $policies = [factory(Policy::class)->create()->id];
        $inputs = [
            'gates' => $gates,
            'policies' => $policies,
            'name' => 'Admin',
            'level_type' => 'country',
            'level_id' => 1
        ];
        $role = $this->repo->create($inputs);

        $deleted = $this->repo->delete($role->uuid);
        $this->assertTrue($deleted);
        $this->assertNull($this->repo->single($role->uuid));
    }
}
