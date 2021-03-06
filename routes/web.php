<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutmeController;
use App\Http\Controllers\AdminController;
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

Route::get('aboutme',[AboutmeController::class,'display']);

Route::get('admin/{name}',[AdminController::class,'display']);

// test
Route::get('admin/{name}',[AdminController::class,'display']);