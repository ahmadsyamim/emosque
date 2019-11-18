<?php namespace Tests\Repositories;

use App\Models\Mosque;
use App\Repositories\MosqueRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;

class MosqueRepositoryTest extends TestCase
{
    use ApiTestTrait, DatabaseTransactions;

    /**
     * @var MosqueRepository
     */
    protected $mosqueRepo;

    public function setUp() : void
    {
        parent::setUp();
        $this->mosqueRepo = \App::make(MosqueRepository::class);
    }

    /**
     * @test create
     */
    public function test_create_mosque()
    {
        $mosque = factory(Mosque::class)->make()->toArray();

        $createdMosque = $this->mosqueRepo->create($mosque);

        $createdMosque = $createdMosque->toArray();
        $this->assertArrayHasKey('id', $createdMosque);
        $this->assertNotNull($createdMosque['id'], 'Created Mosque must have id specified');
        $this->assertNotNull(Mosque::find($createdMosque['id']), 'Mosque with given id must be in DB');
        $this->assertModelData($mosque, $createdMosque);
    }

    /**
     * @test read
     */
    public function test_read_mosque()
    {
        $mosque = factory(Mosque::class)->create();

        $dbMosque = $this->mosqueRepo->find($mosque->id);

        $dbMosque = $dbMosque->toArray();
        $this->assertModelData($mosque->toArray(), $dbMosque);
    }

    /**
     * @test update
     */
    public function test_update_mosque()
    {
        $mosque = factory(Mosque::class)->create();
        $fakeMosque = factory(Mosque::class)->make()->toArray();

        $updatedMosque = $this->mosqueRepo->update($fakeMosque, $mosque->id);

        $this->assertModelData($fakeMosque, $updatedMosque->toArray());
        $dbMosque = $this->mosqueRepo->find($mosque->id);
        $this->assertModelData($fakeMosque, $dbMosque->toArray());
    }

    /**
     * @test delete
     */
    public function test_delete_mosque()
    {
        $mosque = factory(Mosque::class)->create();

        $resp = $this->mosqueRepo->delete($mosque->id);

        $this->assertTrue($resp);
        $this->assertNull(Mosque::find($mosque->id), 'Mosque should not exist in DB');
    }
}
