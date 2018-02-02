<?php

namespace Tests\Feature;

use App\Branch;
use Clocking\Repositories\Interfaces\IBranchRepo;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;

class BranchRepoTest extends TestCase
{
    use DatabaseTransactions;

    private $repo;

    protected function setUp()
    {
        parent::setUp();
        $this->repo = $this->app->make(IBranchRepo::class);
    }

    /** @test */
    public function list()
    {
        $branches = factory(Branch::class, 10)->create();

        $queryParams = [
            'q' => $branches[0]->name
        ];

        $result = $this->repo->list($queryParams);
        $this->assertEquals(1, $result->total());

        $queryParams = [
            'f' => 'a|l:373'
        ];

        $result = $this->repo->list($queryParams);
        $this->assertEquals(10, $result->total());

        $queryParams = [
            'f' => 'a|l:343'
        ];

        $result = $this->repo->list($queryParams);
        $this->assertEquals(0, $result->total());
    }
}
