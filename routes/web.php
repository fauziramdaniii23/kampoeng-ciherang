<?php

use App\Models\wahana;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardAboutController;
use App\Http\Controllers\DashboardWahanaController;
use App\Http\Controllers\DashboardImageController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\WahanaController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\OrderController;
use App\Models\Order;

Route::get('/', [HomeController::class,'index']);
Route::resource('/wahana', WahanaController::class);
Route::resource('/about', AboutController::class);

Route::get('/login', [LoginController::class,'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class,'authenticate']);
Route::post('/logout', [LoginController::class,'logout']);

Route::get('/register', [RegisterController::class,'index'])->middleware('guest');
Route::post('/register', [RegisterController::class,'store']);
Route::post('/order', [OrderController::class,'store']);
Route::delete('/order/{id}', [OrderController::class,'delete']);
Route::get('/invoice/{id}', [OrderController::class,'invoice']);


// Route::get('/dashboard', function(){
//     return view('dashboard.index', [
//         'title' => 'Admin Dashboard'
//     ]);})->middleware('auth');

Route::resource('/dashboard/about', DashboardAboutController::class)->middleware('auth');
Route::resource('/dashboard/wahana', DashboardWahanaController::class)->middleware('auth');

Route::resource('/dashboard/image', DashboardImageController::class)->middleware('auth');
Route::resource('/image', ImageController::class)->middleware('auth');


        