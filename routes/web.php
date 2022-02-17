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

Route::get('/', [\App\Http\Controllers\TodoController::class, 'index']);
Route::get('/add', [\App\Http\Controllers\TodoController::class, 'create']);
Route::post('/add',[\App\Http\Controllers\TodoController::class, 'store']);
Route::get('/show/{todo}',[\App\Http\Controllers\TodoController::class, 'show']);
Route::put('/edit/{id}', [\App\Http\Controllers\TodoController::class,'edit']);
Route::delete('/delete/{todo}',[\App\Http\Controllers\TodoController::class,'destroy']);
Route::get('/discuss',[\App\Http\Controllers\DiscussesController::class,'index']);
Route::get('/discuss/add',[\App\Http\Controllers\DiscussesController::class,'create']);
Route::get('/discuss/filter',[\App\Http\Controllers\DiscussesController::class,'filter']);
Route::get('/discuss/{id}',[\App\Http\Controllers\DiscussesController::class,'show']);
Route::post('/discuss/add',[\App\Http\Controllers\DiscussesController::class,'store']);
Route::post('/discuss/comment',[\App\Http\Controllers\DiscussesController::class,'makeComment']);
