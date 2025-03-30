<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

// controllers
use App\Http\Controllers\HomeController;

Route::get('/', function () {
    return Inertia::render('Welcome');
})->name('home');

Route::get('dashboard',[HomeController::class,"index"])->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/settings.php';
require __DIR__.'/auth.php';
