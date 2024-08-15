<?php

namespace App\Contracts\Services\ProductCategoryService;

use Illuminate\Database\Eloquent\Collection;

interface ProductCategoryServiceInterface
{
    public function getList(): Collection;
}
