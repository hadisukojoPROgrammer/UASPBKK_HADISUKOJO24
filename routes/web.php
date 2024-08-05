<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\WarehouseController;
use App\Http\Controllers\SupllierController;
use App\Http\Controllers\StockmovementController;

Route::get('/', function () {
    return view('welcome');
});

// Routes for Item
Route::resource('items', ItemController::class);

// Routes for Category
Route::resource('categories', CategoryController::class);

Route::resource('/supllier',WarehouseController::class);
Route::resource('/warehouse',SupllierController::class);
Route::resource('/stockmovement',StockmovementController::class);

