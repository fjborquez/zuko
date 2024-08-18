<?php

namespace App\Services\ProductCategoryService;

use App\Contracts\Services\ProductCategoryService\ProductCategoryServiceInterface;
use App\Models\ProductCategory;
use Illuminate\Database\Eloquent\Collection;

class ProductCategoryService implements ProductCategoryServiceInterface
{
    public function getList(): Collection
    {
        return ProductCategory::all();
    }
}
