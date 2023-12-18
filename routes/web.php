<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ComicsController;

Route::get('/comics', [ComicsController::class, 'index'] );
Route::get('/comics/{id}', [ComicsController::class, 'show'] );
Route::get('/comics/{comic}', [ComicsController::class, 'show'])->name('comics.show');
Route::post('/comics', [ComicsController::class, 'store'])->name('comics.store');
