<?php

namespace App\Http\Controllers;

use App\Contracts\Services\ProductCategoryService\ProductCategoryServiceInterface;

class ProductCategoryController extends Controller
{
    public function __construct(
        private readonly ProductCategoryServiceInterface $productCategoryService
    ) {}

    public function list()
    {
        return $this->productCategoryService->getList();
    }
}
