<?php

namespace Tests\Feature;

use App\Beneficiary;
use App\Bid;
use App\Branch;
use App\Module;
use App\Rank;
use Clocking\Helpers\Constants;
use Clocking\Repositories\Interfaces\IBeneficiaryRepo;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Support\Facades\Storage;
use Tests\TestCase;

class BeneficiaryRepoTest extends TestCase
{
    use DatabaseTransactions;

    private $repo;

    protected function setUp()
    {
        parent::setUp();
        Storage::fake();
        $this->repo = $this->app->make(IBeneficiaryRepo::class);
    }

    /** @test */
    public function create()
    {
        $inputs = $this->getInputs();

        $beneficiary = $this->repo->create($inputs);
        $this->assertCount(4, $beneficiary->fingerprints->all());
        $this->assertCount(1, $beneficiary->picture->all());
    }

    /** @test */
    public function update()
    {
        $inputs = $this->getInputs();
        $beneficiary = $this->repo->create($inputs);

        $this->assertTrue($this->repo->update($beneficiary->uuid, ['gender' => Constants::FEMALE]));
    }

    /** @test */
    public function canDelete()
    {
        $inputs = $this->getInputs();
        $beneficiary = $this->repo->create($inputs);

        $this->assertTrue($this->repo->delete($beneficiary->uuid));
    }

    /** @test */
    public function list()
    {
        $beneficiaries = factory(Beneficiary::class, 2)->create();
        $queryParams = [
            'q' => $beneficiaries[0]->full_name
        ];

        $result = $this->repo->list($queryParams);
        $this->assertEquals(1, $result->total());

        $queryParams = [
            'f' => 'a|c:1,a|b:1'
        ];

        $result = $this->repo->list($queryParams);
        $this->assertEquals(1, $result->total());
    }

    /**
     * @return array
     */
    private function getInputs(): array
    {
        $rank = factory(Rank::class)->create();
        $branch = factory(Branch::class)->create();
        $module = factory(Module::class)->create();
        $bid = factory(Bid::class)->create();
        $inputs = [
            'surname' => 'Surname',
            'forenames' => 'Fore Names',
            'gender' => Constants::MALE,
            'date_of_birth' => now()->timestamp,
            'branch_id' => $branch->id,
            'rank_id' => $rank->id,
            'module_id' => $module->id,
            'bid' => $bid->code,
            'bio' => [
                'picture' => base64_encode('picture'),
                'fingers' => [
                    'thumb_right_image' => base64_encode('thumb_right_image'),
                    'thumb_right_fmd' => base64_encode('thumb_right_fmd'),
                    'thumb_left_image' => base64_encode('thumb_left_image'),
                    'thumb_left_fmd' => base64_encode('thumb_left_fmd'),
                    'index_right_image' => base64_encode('index_right_image'),
                    'index_right_fmd' => base64_encode('index_right_fmd'),
                    'index_left_image' => base64_encode('index_left_image'),
                    'index_left_fmd' => base64_encode('index_left_fmd')
                ]
            ]
        ];
        return $inputs;
    }
}
