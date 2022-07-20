<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JadwalController;
use App\Http\Controllers\LapanganController;

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

// Route::get('/', function () {
//     return view('layouts.master');
// });

//Lapangan
Route::get('/lapangan',[LapanganController::class, 'index']);
Route::get('/lapangan/form',[LapanganController::class, 'create']);
Route::post('/lapangan/store',[LapanganController::class, 'store']);
Route::get('/lapangan/edit/{id}',[LapanganController::class, 'edit']);
Route::put('/lapangan/{id}',[LapanganController::class, 'update']);
Route::delete('/lapangan/{id}',[LapanganController::class, 'destroy']);

//Sewa
Route::get('/sewa',[SewaController::class, 'index']);
Route::get('/sewa/form',[SewaController::class, 'create']);
Route::post('/sewa/store',[SewaController::class, 'store']);
Route::get('/sewa/edit/{id}',[SewaController::class, 'edit']);
Route::put('/sewa/{id}',[SewaController::class, 'update']);
Route::delete('/sewa/{id}',[SewaController::class, 'destroy']);

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
