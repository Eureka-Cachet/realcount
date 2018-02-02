<?php

namespace Tests\Feature;

use App\Beneficiary;
use App\Picture;
use Clocking\Repositories\Interfaces\IPictureRepo;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Support\Facades\Storage;
use Tests\TestCase;

class PictureRepoTest extends TestCase
{
    use DatabaseTransactions;

    private $repo;
    private $disk;

    protected function setUp()
    {
        parent::setUp();
        Storage::fake();
        $this->disk = Storage::disk('local');
        $this->repo = $this->app->make(IPictureRepo::class);
    }

    /** @test */
    public function can_addFor()
    {
        $beneficiary = factory(Beneficiary::class)->create();

        $added = $this->repo->addFor($beneficiary, [
            'encoded' => base64_encode('picture')
        ]);

        $this->assertTrue($added);
        $this->disk->assertExists($beneficiary->picture->path);
    }

    /** @test */
    public function can_getFor()
    {
        $beneficiary = factory(Beneficiary::class)->create();

        $this->repo->addFor($beneficiary, [
            'encoded' => base64_encode('picture')
        ]);

        $found = $this->repo->getFor($beneficiary);

        $this->assertEquals($beneficiary->picture->path, $found->path);
    }

    /** @test */
    public function can_updateFor()
    {
        $beneficiary = factory(Beneficiary::class)->create();

        $this->repo->addFor($beneficiary, [
            'encoded' => base64_encode('picture')
        ]);

        $updated = $this->repo->updateFor($beneficiary, [
            'encoded' => base64_encode('picture2')
        ]);

        $this->assertTrue($updated);
        $this->disk->assertExists($beneficiary->picture->path);
    }

    /** @test */
    public function can_deleteFor()
    {
        $beneficiary = factory(Beneficiary::class)->create();

        $this->repo->addFor($beneficiary, [
            'encoded' => base64_encode('picture')
        ]);

        $deleted = $this->repo->deleteFor($beneficiary);

        $this->assertTrue($deleted);
        $this->disk->assertMissing($beneficiary->picture->path);
    }
}
