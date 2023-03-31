<?php

namespace Tests\Feature;

use App\Services\TodoService;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

use function PHPUnit\Framework\assertNotNull;

class TodoListTest extends TestCase
{
    private TodoService $todoService;

    public function setUp(): void
    {
        parent::setUp();

        $this->todoService = $this->app->make(TodoService::class);
    }

    public function testTodoNoNull()
    {
        self::assertNotNull($this->todoService);
    }
}
