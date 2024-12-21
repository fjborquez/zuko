<?php

namespace App\Contracts\Services\ProductPresentationService;

use App\Models\ProductPresentation;
use Illuminate\Database\Eloquent\Collection;

interface ProductPresentationServiceInterface
{
    public function getList(): Collection;

    public function create(array $data = []): ProductPresentation;
}
