<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\DataController;
use App\Http\Controllers\LoginController;

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

Route::get('/dashboard', [DataController::class, 'index'])->name('index');
Route::post('/store', [DataController::class, 'store'])->name('store');
Route::get('/data', [DataController::class, 'data']);
Route::delete('/destroy/{id}', [DataController::class, 'destroy']);
Route::patch('/update/{id}', [DataController::class, 'update']);


Route::get('/', [LoginController::class, 'indexLogin'])->name('login')->middleware('guest');
