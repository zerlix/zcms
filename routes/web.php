<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


// GESCHÜTZTE Admin-Seiten (NUR mit Login!)
Route::middleware('auth')->group(function () {
    Route::resource('pages', \App\Http\Controllers\PageController::class)->except(['show']);
    
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Öffentliche Seite (Slug-Route)
Route::get('pages/{slug}', [\App\Http\Controllers\PageController::class, 'show'])->name('pages.show');


// Dashboard
Route::get('/dashboard', function () {
    return redirect()->route('pages.index');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php';
