<?php

namespace Tests\Feature;

use App\Services\UserService;
use Tests\TestCase;

class UserServiceTest extends TestCase
{
    private UserService $userService;

    protected function setUp(): void
    {
        parent::setUp();

        $this->userService = $this->app->make(UserService::class);
    }

    public function testLoginSuccess()
    {
        self::assertTrue($this->userService->login("dimmascool", "rahasia"));
    }

    public function testLoginUserNotFound()
    {
        self::assertFalse($this->userService->login("eko", "eko"));
    }

    public function testLoginWrongPassword()
    {
        self::assertFalse($this->userService->login("dimmascool", "salah"));
    }
}
