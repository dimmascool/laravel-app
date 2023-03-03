<?php

use Illuminate\Support\Facades\Route;
use League\CommonMark\Environment\Environment;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/environment', function () {
    return 1;
});

Route::get('/test_blade', function () {
    return view('templates/main');
});
