<?php

use App\Http\Controllers\AlumniController;
use App\Http\Controllers\DashboardController;
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

Route::get('/', [DashboardController::class, 'index']);
Route::get('/dashboard', [DashboardController::class, 'index']);
Route::get('/alumni', [AlumniController::class, 'index']);
Route::get('/alumni/tambah', [AlumniController::class, 'create']);
Route::post('/alumni', [AlumniController::class, 'store']);
Route::get('/alumni/{alumni}', [AlumniController::class, 'show']);
Route::delete('/alumni/{alumni}', [AlumniController::class, 'destroy']);
Route::get('/alumni/edit/{alumni}', [AlumniController::class, 'edit']);
Route::patch('/alumni/{alumni}', [AlumniController::class, 'update']);
