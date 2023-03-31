<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class HomeController extends Controller
{
    public function home(Request $request): RedirectResponse | View
    {
        if ($request->session()->exists("user")) {
            return view('todolist', ['title' => 'Todolist']);
        } else {
            return redirect("/login");
        }
    }
}
