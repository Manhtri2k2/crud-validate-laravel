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

Route::get('/form', [App\Http\Controllers\EventsController::class, 'form']);
Route::get('/create', [App\Http\Controllers\EventsController::class, 'create']);
Route::get('/delete', [App\Http\Controllers\EventsController::class, 'delete']);
Route::get('/update', [App\Http\Controllers\EventsController::class, 'update']);
Route::post('/users/signup', [App\Http\Controllers\EventsController::class, 'store']);
