<?php

namespace App\Services;

interface TodoService
{
    public function saveTodo(string $id, string $todo): void;
}
