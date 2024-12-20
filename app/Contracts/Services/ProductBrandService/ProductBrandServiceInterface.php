<?php

namespace App\Contracts\Services\ProductBrandService;

use App\Models\ProductBrand;
use Illuminate\Database\Eloquent\Collection;

interface ProductBrandServiceInterface
{
    public function getList(): Collection;

    public function create(): ProductBrand;
}
