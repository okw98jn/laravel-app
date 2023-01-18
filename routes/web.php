<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {return view('home');})->name('home');

Route::group(['middleware' => ['guest']], function() {
    Route::namespace('User')->prefix('user')->name('user.')->group(function () {
        Route::get('/create', [App\Http\Controllers\User\UserController::class, 'create'])->name('create');
        Route::post('/store', [App\Http\Controllers\User\UserController::class, 'store'])->name('store');
        Route::get('/login', function () {return view('user.login');})->name('login');
        Route::get('/guest_login', [App\Http\Controllers\User\Auth\LoginController::class, 'guest_login'])->name('guest_login');
        Route::post('/login', [App\Http\Controllers\User\Auth\LoginController::class, 'login'])->name('login');
    });
});

Route::group(['middleware' => ['auth']],function () {
    Route::namespace('User')->prefix('user')->name('user.')->group(function () {
        Route::get('/show/{id}', [App\Http\Controllers\User\UserController::class, 'show'])->name('show');
        Route::get('/logout', [App\Http\Controllers\User\Auth\LoginController::class, 'logout'])->name('logout');
    });
});

