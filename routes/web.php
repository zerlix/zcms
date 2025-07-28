<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Resource route for PageController
Route::resource('pages', \App\Http\Controllers\PageController::class);

// Slug-Route NACH der Resource-Route
Route::get('pages/{slug}', [\App\Http\Controllers\PageController::class, 'show'])->name('pages.show');

