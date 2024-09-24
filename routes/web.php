<?php

use App\Http\Controllers\MemberController;
use App\Http\Controllers\registerController;
use Illuminate\Support\Facades\Route;

Route::view('/signup', 'register');
Route::post('/signup', [MemberController::class, 'store']);
Route::get('/', function () {
    return view('welcome');
});
