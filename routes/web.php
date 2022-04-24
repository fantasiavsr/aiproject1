<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\homeController;
use App\Http\Controllers\orderController;
use App\Http\Controllers\mediaController;
use App\Http\Controllers\contactusController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\registerController;
use App\Http\Controllers\adminController;

use App\Http\Controllers\editHomeController;

use App\Http\Controllers\editOrderController;

use App\Http\Controllers\editMediaController;

use App\Http\Controllers\editContactUsController;



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
    return view('welcome');
});

Route::get('/home', [homeController::class, 'index']);

Route::get('/order', [orderController::class, 'index']);
Route::post('/order', [orderController::class, 'store']);


Route::get('/media', [mediaController::class, 'index']);
Route::get('/contactus', [contactusController::class, 'index']);

Route::get('/login', [loginController::class, 'index'])->name('login');
Route::post('/login', [loginController::class, 'authenticate']);
Route::post('/logout', [loginController::class, 'logout']);

Route::get('/register', [registerController::class, 'index']);
Route::post('/register', [registerController::class, 'store']);

Route::get('/admin', [adminController::class, 'index'])->middleware('auth');

Route::get('/editHome', [editHomeController::class, 'index']);
Route::get('/editHome/{id}', [editHomeController::class, 'showData']);
Route::post('/editHome', [editHomeController::class, 'update']);

Route::get('/editOrder', [editOrderController::class, 'index']);
Route::get('/orderDelete/{id}', [editOrderController::class, 'delete']);

Route::get('/editMedia', [editMediaController::class, 'index']);
Route::get('/editMedia/{id}', [editMediaController::class, 'showData']);
Route::post('/editMedia', [editMediaController::class, 'update']);

Route::get('/editContactUs', [editContactUsController::class, 'index']);
Route::get('/editContactUs/{id}', [editContactUsController::class, 'showData']);
Route::post('/editContactUs', [editContactUsController::class, 'update']);

