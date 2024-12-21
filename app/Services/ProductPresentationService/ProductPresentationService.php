<?php

namespace App\Services\ProductPresentationService;

use App\Contracts\Services\ProductPresentationService\ProductPresentationServiceInterface;
use App\Models\ProductPresentation;
use Illuminate\Database\Eloquent\Collection;

class ProductPresentationService implements ProductPresentationServiceInterface
{
    public function getList(): Collection
    {
        return ProductPresentation::all();
    }

    public function create(array $data = []): ProductPresentation
    {
        return ProductPresentation::create($data);
    }
}
