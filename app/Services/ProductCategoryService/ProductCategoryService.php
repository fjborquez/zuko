<?php

namespace App\Services\ProductCategoryService;

use App\Contracts\Services\ProductCategoryService\ProductCategoryServiceInterface;
use App\Models\ProductCategory;
use Illuminate\Database\Eloquent\Collection;
use Spatie\QueryBuilder\QueryBuilder;

class ProductCategoryService implements ProductCategoryServiceInterface
{
    public function getList(): Collection
    {
        return QueryBuilder::for(ProductCategory::class)
            ->allowedSorts('name')
            ->get();
    }
}
