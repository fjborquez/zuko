<?php

namespace App\Http\Controllers;

use App\Contracts\Services\ProductBrandService\ProductBrandServiceInterface;
use Illuminate\Database\QueryException;
use Symfony\Component\HttpFoundation\Response;

class ProductBrandController extends Controller
{
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
}
