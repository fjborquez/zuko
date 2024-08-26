<?php

namespace App\Services\ProductCatalogService;

use App\Contracts\Services\ProductCatalogService\ProductCatalogServiceInterface;
use App\Models\ProductCatalog;
use Illuminate\Database\Eloquent\Collection;

class ProductCatalogService implements ProductCatalogServiceInterface
{
    public function getList(): Collection
    {
        $result = ProductCatalog::with(['category', 'brand', 'type', 'presentation'])
            ->get()
            ->map(function ($item) {
                return [
                    'id' => $item->id,
                    'description' => $item->type->description . ($item->presentation ? ' ' . $item->presentation->description : ''),
                    'brand' => $item->brand->name,
                    'category' => $item->category->name,
                ];
            });

        return new Collection($result->all());
    }
}
