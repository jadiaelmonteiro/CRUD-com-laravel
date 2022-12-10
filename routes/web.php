<?php

use App\Http\Controllers\EpisodesController;
use App\Http\Controllers\UserController;;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SeasonController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SeriesController;
use App\Http\Middleware\Autenticador;

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
})->middleware(Autenticador::class);

Route::resource('/series', SeriesController::class)
    ->except(['show']);

Route::get('/series/{series}/seasons', [SeasonController::class, 'index'])->name('seasons.index');

Route::get('/seasons/{season}/episodes', [EpisodesController::class, 'index'])->name('episodes.index');
Route::post('/seasons/{season}/episodes', [EpisodesController::class, 'update'])->name('episodes.update');

Route::get('/login', [LoginController::class,  'index'])->name('login');
Route::post('/login', [LoginController::class, 'store'])->name('singin');
Route::get('/logout', [LoginController::class, 'destroy'])->name('logout');


Route::get('/register', [UserController::class, 'create'])->name('user.create');
Route::post('/register', [UserController::class, 'store'])->name('send');





//Route::resource('/series', SeriesController::class)->only(['index, create, store']);
// Route::controller(SeriesController::class)->group(function() {

//     Route::get('/series/index', 'index')->name('series.index');
//     Route::get('/series/create', 'create')->name('series.create');
//     Route::post('/series/store', 'store')->name('series.store');
//     Route::get('/series/editar/{id}', 'edit')->name('series.editar');
//     Route::put('/series/update', 'update')->name('series.update');
//     //Route::get('/series/deletar/{id}', 'destroy');
//     Route::delete('/series/deletar/{id}', 'destroy')->name('series.destroy');

    
// });

//Usando nomeclaturas da documentação das funcoes
//Route::resource('/series', SeriesController::class);