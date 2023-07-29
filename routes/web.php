<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\ProfileController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\UserController;

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
    return view('index');
})->name('index');

Route::get('/service', function () {
    return view('service');
})->name('service');

Route::prefix('admin')->middleware(['auth','web'])->group(function () {

    Route::get('/edit_profile',[ProfileController::class,'edit_profile']);
    Route::post('/update_profile',[ProfileController::class,'update_profile']);
    Route::post('/update_password',[ProfileController::class,'update_password']);



    Route::resource('/users',UserController::class);


    Route::resource('/dashboard',ServiceController::class);


    // Route::get('/dashboard', function () {
    //     return view('dashboard');
    // })->name('dashboard');
    
});
require __DIR__ . '/auth.php';
