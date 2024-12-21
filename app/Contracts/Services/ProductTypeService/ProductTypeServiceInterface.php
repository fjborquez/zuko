<?php

namespace App\Contracts\Services\ProductTypeService;

use App\Models\ProductType;
use Illuminate\Database\Eloquent\Collection;

interface ProductTypeServiceInterface
{
    public function getList(): Collection;

    public function create(array $data = []): ProductType;
}
