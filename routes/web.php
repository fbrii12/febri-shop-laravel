<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\ProductController;

Route::resource('products', ProductController::class);

Route::resource('categories', CategoriesController::class)->only(['index', 'create', 'store', 'edit', 'update', 'destroy']);

Route::get('categories/print', [CategoriesController::class, 'print'])->name('categories.print');


