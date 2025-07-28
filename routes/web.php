<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Resource route for PageController
Route::resource('pages', \App\Http\Controllers\PageController::class);
