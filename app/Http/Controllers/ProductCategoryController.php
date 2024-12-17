<?php

namespace App\Http\Controllers;

use App\Contracts\Services\ProductCategoryService\ProductCategoryServiceInterface;
use App\Http\Requests\ProductCategoryRequest;
use Illuminate\Database\QueryException;
use Symfony\Component\HttpFoundation\Response;

class ProductCategoryController extends Controller
{
    private $fields = ['name'];

    public function __construct(
        private readonly ProductCategoryServiceInterface $productCategoryService
    ) {}

    public function list()
    {
        try {
            return $this->productCategoryService->getList();
        } catch (QueryException $exception) {
            report($exception);

            return response()->noContent(Response::HTTP_INTERNAL_SERVER_ERROR);
        }

    }

    public function store(ProductCategoryRequest $request)
    {
        $validated = $request->safe()->only($this->fields);

        try {
            $productCategory = $this->productCategoryService->create($validated);

            return response()->noContent(Response::HTTP_CREATED)
                ->header('Location', url('/api/product-category/'.$productCategory->id));
        } catch (QueryException $exception) {
            report($exception);

            return response()->noContent(Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }
}
