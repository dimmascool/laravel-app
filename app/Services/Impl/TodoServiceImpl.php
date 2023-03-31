<?php

namespace App\Services\Impl;

use App\Services\TodoService;
use Illuminate\Support\Facades\Session;

class TodoServiceImpl implements TodoService
{
    public function saveTodo(string $id, string $todo): void
    {
        if (!Session::exist('todolist')) {
            Session::put('todolist', []);
        }

        Session::push('todolist', [
            "id" => $id,
            "todo" => $todo
        ]);
    }
}
