<?php

use Illuminate\Support\Facades\Route;

Route::view('/signup', 'register');
Route::get('/', function () {
    return view('welcome');
});
