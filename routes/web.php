<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;
use App\Models\tbl_mahasiswa;

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

Route::get('/', [MahasiswaController::class, 'index']);
Route::get('/create', [MahasiswaController::class, 'create']);
Route::POST('/action', [MahasiswaController::class, 'action']);
Route::GET('/{nrp}/edit', [MahasiswaController::class, 'edit']);
Route::PUT('/{nrp}', [MahasiswaController::class, 'update']);
Route::DELETE('/{nrp}', [MahasiswaController::class, 'delete']);
Route::get('/about', [MahasiswaController::class, 'about']);
