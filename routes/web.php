<?php

use App\Http\Controllers\registerController;
use Illuminate\Support\Facades\Route;

Route::view('/signup', 'register');
Route::post('/signup', [registerController::class, 'register']);
Route::get('/', function () {
    return view('welcome');
});
