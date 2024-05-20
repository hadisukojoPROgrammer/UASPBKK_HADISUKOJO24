<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\CategoryController;

Route::get('/', function () {
    return view('welcome');
});

// Routes for Item
Route::resource('items', ItemController::class);

// Routes for Category
Route::resource('categories', CategoryController::class);

