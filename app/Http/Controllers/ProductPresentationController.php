<?php

namespace App\Http\Controllers;

use App\Contracts\Services\ProductPresentationService\ProductPresentationServiceInterface;
use Illuminate\Database\QueryException;
use Symfony\Component\HttpFoundation\Response;

class ProductPresentationController extends Controller
{
    public function __construct(
        private readonly ProductPresentationServiceInterface $productPresentationService
    ) {}

    public function list()
    {
        try {
            return $this->productPresentationService->getList();
        } catch (QueryException $exception) {
            report($exception);
            return response()->noContent(Response::HTTP_INTERNAL_SERVER_ERROR);
        }

    }
}
