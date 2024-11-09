<?php

use Illuminate\Support\Facades\Route;
//
//use App\Http\Controllers\ProfileController;
//
//Route::get('/profile/{id}', [ProfileController::class, 'index']);


use App\Http\Controllers\ProductController;

Route::resource('products', ProductController::class);
