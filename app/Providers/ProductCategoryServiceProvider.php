<?php

namespace App\Providers;

use App\Contracts\Services\ProductCategoryService\ProductCategoryServiceInterface;
use App\Services\ProductCategoryService\ProductCategoryService;
use Illuminate\Support\ServiceProvider;

class ProductCategoryServiceProvider extends ServiceProvider
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
            ProductCategoryServiceInterface::class,
            ProductCategoryService::class
        );
    }
}
