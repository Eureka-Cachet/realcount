<?php

namespace Tests\Feature;

use App\BidSet;
use Clocking\Repositories\Interfaces\IBidSetRepo;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;

class BidSetRepoTest extends TestCase
{
    use DatabaseTransactions;

    private $repo;

    protected function setUp()
    {
        parent::setUp();
        $this->repo = $this->app->make(IBidSetRepo::class);
    }

    /** @test */
    public function create()
    {
        $inputs = factory(BidSet::class)->raw(['amount' => 2]);
        $set = $this->repo->create($inputs);
        $this->assertCount(2, $set->codes);
    }

//    /** @test */
//    public function list()
//    {
//        $sets = factory(BidSet::class, 5)->create();
//        $queryParams = [];
//        $result = $this->repo->list($queryParams);
//        $this->assertEquals(5, $result->total());
//
//        $queryParams = [
//            'q' => $sets[0]->name
//        ];
//        $result = $this->repo->list($queryParams);
//        $this->assertEquals(1, $result->total());
//
//        $queryParams = [
//            'f' => 'ra|'.$sets[0]->rank_id
//        ];
//        $result = $this->repo->list($queryParams);
//        $this->assertEquals(1, $result->total());
//    }
}
