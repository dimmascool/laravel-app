<?php

use Illuminate\Support\Facades\Route;
use League\CommonMark\Environment\Environment;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;
use App\Http\Middleware\GuestMiddleware;
use App\Http\Middleware\MemberMiddleware;

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

Route::get('/dashboard', [HomeController::class, 'home']);


Route::controller(UserController::class)->group(function () {
    Route::get('login', 'login')->name('loginPage')->middleware([GuestMiddleware::class]);
    Route::post('login', 'doLogin')->name('loginAction')->middleware([GuestMiddleware::class]);
    Route::post('logout', 'doLogout')->name('logoutAction')->middleware([MemberMiddleware::class]);
});
