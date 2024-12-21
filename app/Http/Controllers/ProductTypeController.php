<?php

namespace App\Http\Controllers;

use App\Contracts\Services\ProductTypeService\ProductTypeServiceInterface;
use App\Http\Requests\ProductTypeRequest;
use Illuminate\Database\QueryException;
use Symfony\Component\HttpFoundation\Response;

class ProductTypeController extends Controller
{
    private $fields = ["description"];

    public function __construct(
        private readonly ProductTypeServiceInterface $productTypeService
    ) {}

    public function list()
    {
        try {
            return $this->productTypeService->getList();
        } catch (QueryException $exception) {
            report($exception);

            return response()->noContent(Response::HTTP_INTERNAL_SERVER_ERROR);
        }

    }

    public function store(ProductTypeRequest $request)
    {
        $validated = $request->safe()->only($this->fields);

        try {
            $productType = $this->productTypeService->create($validated);

            return response()->noContent(Response::HTTP_CREATED)
                ->header('Location', url('/api/product-type/'.$productType->id));
        } catch (QueryException $exception) {
            report($exception);

            return response()->noContent(Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }
}
