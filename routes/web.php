<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ComicsController;

Route::get('/comics', [ComicsController::class, 'index'] );
Route::get('/comics/{id}', [ComicsController::class, 'show'] );
Route::get('/comics/{comic}', [ComicsController::class, 'show'])->name('comics.show');
Route::post('/comics', [ComicsController::class, 'store'])->name('comics.store');
Route::get('/edit/{id}', [ComicsController::class, 'edit'])->name('comic.edit');
Route::put('/update/{id}', [ComicsController::class, 'update'])->name('comic.update');
