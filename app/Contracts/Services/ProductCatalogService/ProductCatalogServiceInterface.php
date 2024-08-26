<?php

namespace App\Contracts\Services\ProductCatalogService;

use Illuminate\Database\Eloquent\Collection;

interface ProductCatalogServiceInterface
{
    public function getList(): Collection;
}
