<?php

namespace App\Services\ProductTypeService;

use App\Contracts\Services\ProductTypeService\ProductTypeServiceInterface;
use App\Models\ProductType;
use Illuminate\Database\Eloquent\Collection;

class ProductTypeService implements ProductTypeServiceInterface
{
    public function getList(): Collection
    {
        return ProductType::all();
    }

    public function create(array $data = []): ProductType
    {
        return ProductType::create($data);
    }
}
