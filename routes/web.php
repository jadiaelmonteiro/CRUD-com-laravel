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
    return redirect('/series/index');
});

Route::get('/series/index', [SeriesController::class, 'index'])->name('series.index');
Route::get('/series/create', [SeriesController::class, 'create'])->name('series.create');
Route::get('/series/editar/{id}', [SeriesController::class, 'edit']);
Route::post('/series/store', [SeriesController::class, 'store'])->name('series.store');
Route::post('/series/update', [SeriesController::class, 'update'])->name('series.update');
Route::get('/series/deletar/{id}', [SeriesController::class, 'destroy']);

//Usando nomeclaturas da documentação das funcoes
//Route::resource('/series', SeriesController::class);
