<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class PostApiTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testPostIndex()
    {
        $headers = [
            'Authorization' => '123456',
        ];

        $response = $this->withHeaders($headers)->get('api/posts');
        $response->assertStatus(200);
    }

    public function testFetchBlogById()
    {
        $postId = 1;
        $headers = [
            'Authorization' => '123456',
        ];
        $response = $this->withHeaders($headers)->get("api/posts/{$postId}");
        $response->assertStatus(200);
    }

    public function testDeleteBlogById()
    {
        $postId = 2;
        $headers = [
            'Authorization' => '123456',
        ];
        $response = $this->withHeaders($headers)->delete("api/posts/{$postId}");
        $response->assertStatus(200);
    }

    public function testStoreBlog()
    {
        $postData = [
            'title' => 'Test Blog 100',
            'content' => 'This is a test blog content. Lorem ipsum dolor sit amet.',
            'user_id' => 100
        ];
        $headers = [
            'Authorization' => '123456',
        ];
        $response = $this->withHeaders($headers)->post('api/posts', $postData);
        $response->assertStatus(200);
    }

    public function testUpdateBlogById()
    {
        $postId = 1;

        $postData = [
            'title' => 'Updated Title',
            'content' => 'Updated content for the blog post.',
            'user_id' => 1
        ];

        $headers = [
            'Authorization' => '123456',
        ];
        $response = $this->withHeaders($headers)->put("api/posts/{$postId}", $postData);
        $response->assertStatus(200);
    }
}
