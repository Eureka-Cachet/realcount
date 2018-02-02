<?php

namespace Tests\Feature;

use App\User;
use Clocking\Repositories\Interfaces\IUserRepo;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;

class UserRepoTest extends TestCase
{
    use DatabaseTransactions;

    private $repo;

    protected function setUp()
    {
        parent::setUp();
        $this->repo = $this->app->make(IUserRepo::class);
    }

    /** @test */
    public function all()
    {
        factory(User::class, 5)->create();
        $this->assertCount(5, $this->repo->all());
    }

    /** @test */
    public function list()
    {
        $user = factory(User::class)->create();

        //search query
        $inputs = ['q' => $user->full_name];
        $result = $this->repo->list($inputs);
        $this->assertEquals(1, $result->total());

        //filter
        factory(User::class, 1)->create();
        $inputs = ['f' => 's|0'];
        $result = $this->repo->list($inputs);
        $this->assertEquals(0, $result->total());
    }

    /** @test */
    public function create()
    {
        $inputs = factory(User::class)->raw();

        $user = $this->repo->create($inputs);
        $this->assertEquals($inputs['full_name'], $user->full_name);
    }

    /** @test */
    public function single()
    {
        $user = factory(User::class)->create();

        $useR = $this->repo->single($user->uuid);
        $this->assertEquals($user->full_name, $useR->full_name);
    }

    /** @test */
    public function update()
    {
        $user = factory(User::class)->create();
        $inputs = ['full_name' => 'Full Name'];

        $updated = $this->repo->update($user->uuid, $inputs);
        $this->assertTrue($updated);
        $useR = $this->repo->single($user->uuid);
        $this->assertEquals($inputs['full_name'], $useR->full_name);
    }

    /** @test */
    public function remove()
    {
        $user = factory(User::class)->create();
        $this->assertTrue($this->repo->delete($user->uuid));
        $this->assertNull($this->repo->single($user->uuid));
    }
}
