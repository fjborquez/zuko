<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductCatalogRequest;
use App\Services\ProductCatalogService\ProductCatalogService;
use Illuminate\Database\QueryException;
use Symfony\Component\HttpFoundation\Response;

class ProductCatalogController extends Controller
{
    private $fields = ['category_id', 'brand_id', 'type_id', 'presentation_id'];

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

    public function store(ProductCatalogRequest $request)
    {
        $validated = $request->safe()->only($this->fields);
        $productCatalog = $this->productCatalogService->create($validated);

        return response()->noContent(Response::HTTP_CREATED)
            ->header('Location', url('/api/product-catalog/'.$productCatalog->id));
    }
}
