<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ComicsController;

Route::get('/comics', [ComicsController::class, 'index'] );
Route::get('/comics/{id}', [ComicsController::class, 'show'] );
