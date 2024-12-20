<?php

use App\Http\Controllers\ProductBrandController;
use App\Http\Controllers\ProductCatalogController;
use App\Http\Controllers\ProductCategoryController;
use App\Http\Controllers\ProductPresentationController;
use App\Http\Controllers\ProductTypeController;
use Illuminate\Support\Facades\Route;

Route::get('/product-category', [ProductCategoryController::class, 'list']);
Route::post('/product-category', [ProductCategoryController::class, 'store']);

Route::get('/product-catalog', [ProductCatalogController::class, 'list']);
Route::post('/product-catalog', [ProductCatalogController::class, 'store']);

Route::get('/product-brand', [ProductBrandController::class, 'list']);
Route::post('/product-brand', [ProductBrandController::class, 'store']);

Route::get('/product-type', [ProductTypeController::class, 'list']);

Route::get('/product-presentation', [ProductPresentationController::class, 'list']);
