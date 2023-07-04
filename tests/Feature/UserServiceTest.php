<?php

namespace Tests\Unit\Services;

use App\Services\UserService;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UserServiceTest extends TestCase
{
    use RefreshDatabase, WithFaker;

    /** @test */
    public function it_can_create_an_account()
    {
        $userService = new UserService();

        $userData = [
            'name' => 'daffa alif',
            // 'email' => 'daffa@gmail.com',
            'password' => 'password123',
        ];

        $query = $userService->createAccount($userData);
        $this->assertTrue($query);
        // $this->assertNotNull($userService->createAccount($userData));
        // $this->assertDatabaseHas('users', [
        //     'email' => $userData['email'],
        // ]);
    }
}

