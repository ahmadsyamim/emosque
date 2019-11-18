<?php namespace Tests\APIs;

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;
use App\Models\Mosque;

class MosqueApiTest extends TestCase
{
    use ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function test_create_mosque()
    {
        $mosque = factory(Mosque::class)->make()->toArray();

        $this->response = $this->json(
            'POST',
            '/api/mosques', $mosque
        );

        $this->assertApiResponse($mosque);
    }

    /**
     * @test
     */
    public function test_read_mosque()
    {
        $mosque = factory(Mosque::class)->create();

        $this->response = $this->json(
            'GET',
            '/api/mosques/'.$mosque->id
        );

        $this->assertApiResponse($mosque->toArray());
    }

    /**
     * @test
     */
    public function test_update_mosque()
    {
        $mosque = factory(Mosque::class)->create();
        $editedMosque = factory(Mosque::class)->make()->toArray();

        $this->response = $this->json(
            'PUT',
            '/api/mosques/'.$mosque->id,
            $editedMosque
        );

        $this->assertApiResponse($editedMosque);
    }

    /**
     * @test
     */
    public function test_delete_mosque()
    {
        $mosque = factory(Mosque::class)->create();

        $this->response = $this->json(
            'DELETE',
             '/api/mosques/'.$mosque->id
         );

        $this->assertApiSuccess();
        $this->response = $this->json(
            'GET',
            '/api/mosques/'.$mosque->id
        );

        $this->response->assertStatus(404);
    }
}
