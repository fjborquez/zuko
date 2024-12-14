<?php

namespace App\Contracts\Services\ProductBrandService;

use Illuminate\Database\Eloquent\Collection;

interface ProductBrandServiceInterface
{
    public function getList(): Collection;
}
