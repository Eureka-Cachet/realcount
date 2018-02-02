<?php

namespace Tests\Feature;

use App\Branch;
use App\Device;
use Clocking\Repositories\Interfaces\IDeviceRepo;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;

class DeviceRepoTest extends TestCase
{
    use DatabaseTransactions;

    private $repo;

    protected function setUp()
    {
        parent::setUp();
        $this->repo = $this->app->make(IDeviceRepo::class);
    }

    /** @test */
    public function map()
    {
        $device = factory(Device::class)->create();
        $branch = factory(Branch::class)->create();

        $this->assertTrue($this->repo->map($device, $branch));
        $this->assertTrue($this->repo->map($device, $branch));
        $this->assertTrue($this->repo->map($device, $branch));
    }

    /** @test */
    public function unMap()
    {
        $device = factory(Device::class)->create();
        $branch = factory(Branch::class)->create();
        $this->repo->map($device, $branch);

        $this->assertTrue($this->repo->unMap($device, $branch));
        $this->assertTrue($this->repo->unMap($device, $branch));
        $this->assertTrue($this->repo->unMap($device, $branch));
    }

    /** @test */
    public function list()
    {
        list($device1, $device2) = factory(Device::class, 2)->create();
        $branch1 = factory(Branch::class)->create();
        $branch2 = factory(Branch::class)->create(['location_id' => 432]);
        $device3 = factory(Device::class)->create();

        $this->repo->map($device1, $branch1);
        $this->repo->map($device2, $branch2);

        $result = $this->repo->list([]);
        $this->assertEquals(3, $result->total());

        $queryParams = [
            'q' => $device3->name
        ];
        $result = $this->repo->list($queryParams);
        $this->assertEquals(1, $result->total());

        $queryParams = [
            'f' => 's|0'
        ];
        $result = $this->repo->list($queryParams);
        $this->assertEquals(1, $result->total());

        $queryParams = [
            'f' => 'a|r:3'
        ];
        $result = $this->repo->list($queryParams);
        $this->assertEquals(2, $result->total());
    }
}
