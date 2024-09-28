<?php

use App\Http\Controllers\loginController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\registerController;
use Illuminate\Support\Facades\Route;

Route::view('/signup', 'register');
Route::post('/signup', [MemberController::class, 'store']);
Route::get('/', function () {
    return view('welcome');
});
Route::view('/login', 'login');
Route::post('/login', [loginController::class, 'check']);
Route::view('/dashboard', 'dashboard')->middleware('MembersMiddleware');
