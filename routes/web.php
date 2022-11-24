<?php

use Illuminate\Support\Facades\Route;

Route::get("/", \App\Http\Controllers\AppController::class);
Route::resource("product", \App\Http\Controllers\ProductController::class);
