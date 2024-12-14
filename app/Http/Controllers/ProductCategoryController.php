<?php

namespace App\Http\Controllers;

use App\Contracts\Services\ProductCategoryService\ProductCategoryServiceInterface;
use Illuminate\Database\QueryException;
use Symfony\Component\HttpFoundation\Response;

class ProductCategoryController extends Controller
{
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
}
