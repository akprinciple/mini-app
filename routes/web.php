<?php

use App\Http\Controllers\loginController;
use App\Http\Controllers\logoutController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\registerController;
use App\Http\Middleware\MembersMiddleware;
use Illuminate\Support\Facades\Route;

Route::view('/signup', 'register');
Route::post('/signup', [MemberController::class, 'store']);
Route::get('/', function () {
    return view('welcome');
});
Route::view('/login', 'login');
Route::post('/login', [loginController::class, 'check']);
// Route::view('/dashboard', 'dashboard')->middleware(MembersMiddleware::class);

Route::middleware(MembersMiddleware::class)->group(function () {
})->prefix('consumer');
Route::group(['prefix'=> 'consumer', 'middleware'=>MembersMiddleware::class], function () {
    Route::view('/dashboard', 'dashboard');
});
Route::get('/logout', [logoutController::class, 'logout']);
