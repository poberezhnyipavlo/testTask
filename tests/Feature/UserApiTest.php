<?php

namespace Tests\Feature;

use App\User;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UserApiTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testIndex()
    {
        $response = $this->get('/api/users');
        $response->assertStatus(200);
    }

    public function testShow()
    {
        $response = $this->get('/api/users/3');
        $response->assertStatus(200);
    }

    public function testCreate()
    {
        $data = [
            'name' => 'Name test',
            'status' => 0,
            'email' => 'email@test198.com',
            'password' => '123456',
            'role' => 'user',
        ];

        $response = $this->post('/api/users/', $data);
        $response->assertStatus(201);
    }

    public function testUpdate()
    {
        $data = [
            'name' => 'Name test',
            'status' => 0,
            //'email' => 'email@test.com',
//            'password' => '123456',
        ];

        $response = $this->put('/api/users/20', $data);
        $response->assertStatus(200);
    }

    public function testDelete()
    {
        $response = $this->delete('/api/users/7');
        $response->assertStatus(204);
    }
}
