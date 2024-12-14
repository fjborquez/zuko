<?php

namespace App\Providers;

use App\Contracts\Services\ProductBrandService\ProductBrandServiceInterface;
use App\Services\ProductBrandService\ProductBrandService;
use Illuminate\Support\ServiceProvider;

class ProductBrandServiceProvider extends ServiceProvider
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
            ProductBrandServiceInterface::class,
            ProductBrandService::class
        );
    }
}
