<?php

namespace App\Contracts\Services\ProductPresentationService;

use Illuminate\Database\Eloquent\Collection;

interface ProductPresentationServiceInterface
{
    public function getList(): Collection;
}
