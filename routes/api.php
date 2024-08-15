<?php

use App\Http\Controllers\ProductCategoryController;
use Illuminate\Support\Facades\Route;

Route::get('/product-category', [ProductCategoryController::class, 'list']);
