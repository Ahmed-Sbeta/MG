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


//login ()
Route::get('/login',[App\Http\Controllers\MainController::class,'login']);
Route::post('/login',[App\Http\Controllers\auth\LoginController::class,'login'])->name('login'); //login button

//logOut ()
Route::post('/logout',[App\Http\Controllers\MainController::class,'logout'])->name('adminlogout'); //logout button

//register ()
Route::get('/register',[App\Http\Controllers\MainController::class,'register']);
Route::post('/register',[App\Http\Controllers\MainController::class,'registration'])->name('register');


//main
Route::get('/',[App\Http\Controllers\MainController::class,'index']);


Route::resource('projects', App\Http\Controllers\ProjectsController::class);

Route::resource('orders', App\Http\Controllers\OrdersController::class);

Route::resource('member', App\Http\Controllers\UserController::class);
