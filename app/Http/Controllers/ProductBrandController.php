<?php

namespace App\Http\Controllers;

use App\Contracts\Services\ProductBrandService\ProductBrandServiceInterface;
use App\Http\Requests\ProductBrandRequest;
use Illuminate\Database\QueryException;
use Symfony\Component\HttpFoundation\Response;

class ProductBrandController extends Controller
{
    private $fields = ['name', 'description'];

    public function __construct(
        private readonly ProductBrandServiceInterface $productBrandService
    ) {}

    public function list()
    {
        try {
            return $this->productBrandService->getList();
        } catch (QueryException $exception) {
            report($exception);

            return response()->noContent(Response::HTTP_INTERNAL_SERVER_ERROR);
        }

    }

    public function store(ProductBrandRequest $request)
    {
        $validated = $request->safe()->only($this->fields);

        try {
            $productBrand = $this->productBrandService->create($validated);

            return response()->noContent(Response::HTTP_CREATED)
                ->header('Location', url('/api/product-brand/'.$productBrand->id));
        } catch (QueryException $exception) {
            report($exception);

            return response()->noContent(Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }
}
