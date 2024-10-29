<?php

use App\Http\Controllers\consumerController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\logoutController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\registerController;
use App\Http\Middleware\AdminMiddleware;
use App\Http\Middleware\FarmerMiddleware;
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

// Route::middleware(MembersMiddleware::class)->group(function () {
// })->prefix('consumer');


// Route for Admin
Route::group(['prefix'=> 'admin', 'middleware'=>AdminMiddleware::class], function () {
    // Route::view('/', 'admin.dashboard');
    
    Route::get('/', function(){
        return view('admin.dashboard');
    });
    Route::resource('consumers', consumerController::class);
});

// Group Route for Consumers
Route::group(['prefix'=> 'consumer', 'middleware'=>MembersMiddleware::class], function () {
    Route::view('/', 'dashboard');
});
// Group Route for Farmers
Route::group(['prefix'=> 'farmer', 'middleware'=>FarmerMiddleware::class], function () {
    Route::view('/', 'dashboard');
    
    Route::get('/', function(){
        return "Welcome";
    });
});
Route::get('/logout', [logoutController::class, 'logout']);
