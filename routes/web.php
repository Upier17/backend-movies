<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\MovieController;

// 🌹 Ruta principal que muestra tu catálogo con diseño
Route::get('/', [MovieController::class, 'index'])->name('home');



