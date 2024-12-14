<?php

namespace App\Http\Controllers;

use App\Contracts\Services\ProductTypeService\ProductTypeServiceInterface;
use Illuminate\Database\QueryException;
use Symfony\Component\HttpFoundation\Response;

class ProductTypeController extends Controller
{
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
}
