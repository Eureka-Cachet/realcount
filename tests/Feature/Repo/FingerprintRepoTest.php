<?php

namespace Tests\Feature;

use App\Beneficiary;
use App\Fingerprint;
use Clocking\Repositories\Interfaces\IFingerprintRepo;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Support\Facades\Storage;
use Tests\TestCase;

class FingerprintRepoTest extends TestCase
{
    use DatabaseTransactions;

    private $encodedFingerprint = "/9j/4AAQSkZJRgABAQAAAQABAAD/2wBDAAEBAQEBAQEBAQEBANsiiiWyU357K3u4THMhdIpoLmIb5FXzYpZXjbAZfMAIDbGyhPliRZCrR0UUAJp+nWWmwzQWVrFbRPK8zRwRxpEZWaQyyNHGI0Dz7EdyMEuXmkd5X1Kc6dFFABRRRQAUUUUAf//Z";


    private $repo;
    private $disk;

    protected function setUp()
    {
        parent::setUp();
        Storage::fake();
        $this->disk = Storage::disk('local');
        $this->repo = $this->app->make(IFingerPrintRepo::class);
    }

    /** @test */
    public function can_addFor()
    {
        list($beneficiary, $fingerprints) = $this->bootstrap();

        $fingerprints = $this->repo->addFor($beneficiary, $fingerprints);

        collect($fingerprints)->map(function($fp){return $fp['path'];})
            ->each(function($p){$this->disk->assertExists($p);});
    }

    /** @test */
    public function can_getFor()
    {
        list($beneficiary, $fingerprints) = $this->bootstrap();
        $this->repo->addFor($beneficiary, $fingerprints);

        $fingerprints = $this->repo->getFor($beneficiary);

        collect($fingerprints)->map(function($fp){return $fp['path'];})
            ->each(function($p){$this->disk->assertExists($p);});

        $this->assertCount(4, $fingerprints);
    }

    /** @test */
    public function can_updateFor()
    {
        list($beneficiary, $fingerprints) = $this->bootstrap();
        $this->repo->addFor($beneficiary, $fingerprints);

        $updated = $this->repo->updateFor($beneficiary, $fingerprints);

        $this->assertTrue($updated);
    }

    /** @test */
    public function can_deleteFor()
    {
        list($beneficiary, $fingerprints) = $this->bootstrap();
        $beneficiary_2 = factory(Beneficiary::class)->create();
        $this->repo->addFor($beneficiary, $fingerprints);
        $this->repo->addFor($beneficiary_2, $fingerprints);

        $paths = collect($beneficiary->fingerprints)->map(function ($fp) {
            return $fp->path;
        });
        $paths_2 = collect($beneficiary_2->fingerprints)->map(function ($fp) {
            return $fp->path;
        });

        $deleted = $this->repo->deleteFor($beneficiary);

        $paths->each(function($p){$this->disk->assertMissing($p);});
        $paths_2->each(function($p){$this->disk->assertExists($p);});

        $this->assertTrue($deleted);
    }

    /**
     * @return array
     */
    private function bootstrap(): array
    {
        $beneficiary = factory(Beneficiary::class)->create();
        $fingerprints = [
            array_add(factory(Fingerprint::class, 'thumb_right')->raw(), "encoded", $this->encodedFingerprint),
            array_add(factory(Fingerprint::class, 'thumb_left')->raw(), "encoded", $this->encodedFingerprint),
            array_add(factory(Fingerprint::class, 'index_left')->raw(), "encoded", $this->encodedFingerprint),
            array_add(factory(Fingerprint::class, 'index_right')->raw(), "encoded", $this->encodedFingerprint),
        ];
        return array($beneficiary, $fingerprints);
    }
}
