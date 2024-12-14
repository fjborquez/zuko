<?php

namespace App\Providers;

use App\Contracts\Services\ProductPresentationService\ProductPresentationServiceInterface;
use App\Services\ProductPresentationService\ProductPresentationService;
use Illuminate\Support\ServiceProvider;

class ProductPresentationServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void {}

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        $this->app->bind(
            ProductPresentationServiceInterface::class,
            ProductPresentationService::class
        );
    }
}
