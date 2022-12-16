<?php
use App\Http\Controllers\ProfileController;
use App\Mail\SeriesCreated;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/email', function () {
    return new SeriesCreated(
        "Jadiael é o cara",
        12, 
        10, 
        5,);
});

require __DIR__.'/auth.php';
