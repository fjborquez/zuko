<?php

use App\Http\Controllers\ProductCatalogController;
use App\Http\Controllers\ProductCategoryController;
use Illuminate\Support\Facades\Route;

Route::get('/product-category', [ProductCategoryController::class, 'list']);

Route::get('/product-catalog', [ProductCatalogController::class, 'list']);
Route::post('/product-catalog', [ProductCatalogController::class, 'store']);
