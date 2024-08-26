<?php

namespace App\Providers;

use App\Contracts\Services\ProductCatalogService\ProductCatalogServiceInterface;
use App\Services\ProductCatalogService\ProductCatalogService;
use Illuminate\Support\ServiceProvider;

class ProductCatalogServiceProvider extends ServiceProvider
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
            ProductCatalogServiceInterface::class,
            ProductCatalogService::class
        );
    }
}
