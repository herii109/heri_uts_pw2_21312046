<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\CastController;
use App\Http\Controllers\Perancontrollers;

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


// Route::get('/master', function () {
//     return view('layout.master');
// });

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function () {
    echo "<h1>Hello laravel</h1>";
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/forminput', [PagesController::class,'FormInput']);
Route::post('/welcome', [PagesController::class,'Welcome']);

Route::get('/datatable', function () {
    return view('datatable.index');
});

// CRUD CAST
Route::get('/cast', [CastController::class,'index']);
Route::get('/cast/create', [CastController::class,'create']);
Route::post('/cast', [CastController::class,'store']);
Route::get('/cast/{cast_id}/edit', [CastController::class,'edit']);
Route::put('/cast/{cast_id}', [CastController::class,'update']);
Route::delete('/cast/{cast_id}', [CastController::class,'destroy']);

// CRUD peran
Route::get('/peran', [Perancontrollers::class,'index']);
Route::get('/peran/create', [Perancontroller::class,'create']);
Route::post('/peran', [Perancontroller::class,'store']);
Route::get('/peran/{peran}/edit', [Perancontroller::class,'edit']);
Route::put('/peran/{peran}', [Perancontroller::class,'update']);
Route::delete('/peran/{peran_id}', [Perancontroller::class,'destroy']);






