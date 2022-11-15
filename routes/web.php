<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SeriesController;

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

Route::get('/', function () {
    return redirect('/series');
});

Route::get('/series', [SeriesController::class, 'index']);
Route::get('/series/criar', [SeriesController::class, 'create']);
Route::get('/series/editar/{id}', [SeriesController::class, 'edit']);
Route::post('/series/salvar', [SeriesController::class, 'store']);
Route::post('/series/atualizar', [SeriesController::class, 'update']);
Route::get('/series/deletar/{id}', [SeriesController::class, 'destroy']);
