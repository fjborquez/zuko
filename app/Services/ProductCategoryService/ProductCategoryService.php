<?php

namespace App\Services\ProductCategoryService;

use App\Contracts\Services\ProductCategoryService\ProductCategoryServiceInterface;
use App\Models\ProductCategory;
use Illuminate\Database\Eloquent\Collection;

class ProductCategoryService implements ProductCategoryServiceInterface
{
    public function __construct(private readonly ProductCategory $productCategory) {}

    public function getList(): Collection
    {
        return $this->productCategory->all();
    }
}
