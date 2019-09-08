<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ArticleApiTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testIndex()
    {
        $response = $this->get('/api/articles');

        $response->assertStatus(200);
    }

    public function testShow()
    {
        $response = $this->get('/api/articles/6');

        $response->assertStatus(200);
    }

    public function testCreate()
    {
        $data = [
            'title' => 'Title test',
            'status' => 0,
            'description' => 'test description',
        ];

        $response = $this->post('/api/articles', $data);
        $response->assertStatus(201);
    }

    public function testUpdate()
    {
        $data = [
            'title' => 'uunit Title test',
            'status' => 0,
            'description' => 'test description',
        ];

        $response = $this->put('/api/articles/27', $data);
        $response->assertStatus(200);
    }

    public function testDelete()
    {
        $response = $this->delete('/api/articles/33');
        $response->assertStatus(204);
    }
}
