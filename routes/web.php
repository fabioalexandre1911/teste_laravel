<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VagaController;
use App\Http\Controllers\CandidatoController;
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

Route::get('/vagas', [VagaController::class, 'index'])->name("vagas.index");
Route::post('/vagas/store', [VagaController::class, 'store']);
Route::get('/vagas/create', [VagaController::class, 'create']);
Route::get('/vagas/edit/{id}', [VagaController::class, 'edit']);
Route::put('/vagas/{id}', [VagaController::class, 'update'])->name("vagas.update");
Route::delete('/vagas/{id}', [VagaController::class, 'destroy']);



Route::get('/candidatos', [CandidatoController::class, 'index']);
Route::post('/candidatos/store', [CandidatoController::class, 'store']);
Route::get('/candidatos/create', [CandidatoController::class, 'create']);
Route::get('/candidatos/edit/{id}', [CandidatoController::class, 'edit']);
Route::put('/candidatos/{id}', [CandidatoController::class, 'update']);
Route::delete('/candidatos/{id}', [CandidatoController::class, 'destroy']);



