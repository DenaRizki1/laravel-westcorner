<?php

use App\Http\Controllers\UserController;
use App\Models\TreatmentModel;
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

Route::get('/', [UserController::class, 'index']);
Route::get('/tambah', [UserController::class, 'tambah']);
Route::post('/simpan', [UserController::class, 'simpanData']);
Route::get('delete/{id_treatment}', [UserController::class, 'delete']);
Route::get('/edit/{id_treatment}', [UserController::class, 'edit']);
Route::post('/edit/update/{id_treatment}', [UserController::class, 'update']);
