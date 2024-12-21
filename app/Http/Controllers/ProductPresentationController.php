<?php

namespace App\Http\Controllers;

use App\Contracts\Services\ProductPresentationService\ProductPresentationServiceInterface;
use App\Http\Requests\ProductPresentationRequest;
use Illuminate\Database\QueryException;
use Symfony\Component\HttpFoundation\Response;

class ProductPresentationController extends Controller
{
    private $fields = ['description'];

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

    public function store(ProductPresentationRequest $request)
    {
        $validated = $request->safe()->only($this->fields);

        try {
            $productPresentation = $this->productPresentationService->create($validated);

            return response()->noContent(Response::HTTP_CREATED)
                ->header('Location', url('/api/product-presentation/'.$productPresentation->id));
        } catch (QueryException $exception) {
            report($exception);

            return response()->noContent(Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }
}
