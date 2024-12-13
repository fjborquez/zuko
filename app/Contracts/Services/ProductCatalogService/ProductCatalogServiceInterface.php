<?php

namespace App\Contracts\Services\ProductCatalogService;

use App\Models\ProductCatalog;
use Illuminate\Database\Eloquent\Collection;

interface ProductCatalogServiceInterface
{
    public function getList(): Collection;

    public function create(array $data = []): ProductCatalog;
}
