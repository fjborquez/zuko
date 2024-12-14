<?php

namespace App\Services\ProductBrandService;

use App\Contracts\Services\ProductBrandService\ProductBrandServiceInterface;
use App\Models\ProductBrand;
use Illuminate\Database\Eloquent\Collection;

class ProductBrandService implements ProductBrandServiceInterface
{
    public function getList(): Collection
    {
        return ProductBrand::all();
    }
}
