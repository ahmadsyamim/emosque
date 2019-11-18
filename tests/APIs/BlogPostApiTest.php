<?php namespace Tests\APIs;

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;
use App\Models\BlogPost;

class BlogPostApiTest extends TestCase
{
    use ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function test_create_blog_post()
    {
        $blogPost = factory(BlogPost::class)->make()->toArray();

        $this->response = $this->json(
            'POST',
            '/api/blog_posts', $blogPost
        );

        $this->assertApiResponse($blogPost);
    }

    /**
     * @test
     */
    public function test_read_blog_post()
    {
        $blogPost = factory(BlogPost::class)->create();

        $this->response = $this->json(
            'GET',
            '/api/blog_posts/'.$blogPost->id
        );

        $this->assertApiResponse($blogPost->toArray());
    }

    /**
     * @test
     */
    public function test_update_blog_post()
    {
        $blogPost = factory(BlogPost::class)->create();
        $editedBlogPost = factory(BlogPost::class)->make()->toArray();

        $this->response = $this->json(
            'PUT',
            '/api/blog_posts/'.$blogPost->id,
            $editedBlogPost
        );

        $this->assertApiResponse($editedBlogPost);
    }

    /**
     * @test
     */
    public function test_delete_blog_post()
    {
        $blogPost = factory(BlogPost::class)->create();

        $this->response = $this->json(
            'DELETE',
             '/api/blog_posts/'.$blogPost->id
         );

        $this->assertApiSuccess();
        $this->response = $this->json(
            'GET',
            '/api/blog_posts/'.$blogPost->id
        );

        $this->response->assertStatus(404);
    }
}
