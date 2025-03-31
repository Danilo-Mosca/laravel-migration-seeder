<?php

use App\Http\Controllers\TrainController;
use Illuminate\Support\Facades\Route;

// Chiamata di una rotta usando i controller:
Route::get('/', [TrainController::class, 'index']);