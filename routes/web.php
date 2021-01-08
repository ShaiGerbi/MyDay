<?php

use App\Http\Controllers\AssignController;
use App\Http\Controllers\EquipmentController;
use App\Http\Controllers\TaskController;
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

Route::view('/home', 'home')->name('home');

Route::resource('tasks', TaskController::class);
Route::resource('assigns', AssignController::class);
Route::resource('equipment', EquipmentController::class);
