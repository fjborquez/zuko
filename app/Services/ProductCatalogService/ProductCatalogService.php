<?php

namespace App\Services\ProductCatalogService;

use App\Contracts\Services\ProductCatalogService\ProductCatalogServiceInterface;
use App\Models\ProductCatalog;
use Illuminate\Database\Eloquent\Collection;

class ProductCatalogService implements ProductCatalogServiceInterface
{
    public function getList(): Collection
    {
        return ProductCatalog::with(['category', 'brand', 'type', 'presentation'])->get();
    }
}
