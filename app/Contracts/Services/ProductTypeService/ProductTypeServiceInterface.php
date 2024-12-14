<?php

namespace App\Contracts\Services\ProductTypeService;

use Illuminate\Database\Eloquent\Collection;

interface ProductTypeServiceInterface
{
    public function getList(): Collection;
}
