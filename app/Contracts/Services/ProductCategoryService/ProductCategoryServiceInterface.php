<?php

namespace App\Contracts\Services\ProductCategoryService;

use App\Models\ProductCategory;
use Illuminate\Database\Eloquent\Collection;

interface ProductCategoryServiceInterface
{
    public function getList(): Collection;

    public function create(array $data = []): ProductCategory;
}
