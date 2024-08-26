<?php

namespace App\Http\Controllers;

use App\Contracts\Services\ProductCategoryService\ProductCategoryServiceInterface;
use App\Services\ProductCatalogService\ProductCatalogService;
use Illuminate\Database\QueryException;
use Symfony\Component\HttpFoundation\Response;

class ProductCatalogController extends Controller
{
    public function __construct(
        private readonly ProductCatalogService $productCatalogService
    ) {}

    public function list()
    {
        try {
            return $this->productCatalogService->getList();
        } catch (QueryException $exception) {
            return response()->noContent(Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }
}
