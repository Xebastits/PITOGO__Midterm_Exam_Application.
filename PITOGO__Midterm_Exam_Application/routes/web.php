<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

// Go to product controller in root agad.
Route::get('/', [ProductController::class, 'index']);