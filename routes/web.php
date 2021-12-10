<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PropertyController;

Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('/property/{id}', [PropertyController::class, 'single'])->name('single-property');
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');
require __DIR__.'/auth.php';
