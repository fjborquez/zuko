<?php

namespace App\Providers;

use App\Contracts\Services\ProductTypeService\ProductTypeServiceInterface;
use App\Services\ProductTypeService\ProductTypeService;
use Illuminate\Support\ServiceProvider;

class ProductTypeServiceProvider extends ServiceProvider
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
            ProductTypeServiceInterface::class,
            ProductTypeService::class
        );
    }
}
