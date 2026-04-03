<?php

use App\Providers\AppServiceProvider;
use App\Providers\ProductBrandServiceProvider;
use App\Providers\ProductCatalogServiceProvider;
use App\Providers\ProductCategoryServiceProvider;
use App\Providers\ProductPresentationServiceProvider;
use App\Providers\ProductTypeServiceProvider;

return [
    AppServiceProvider::class,
    ProductCategoryServiceProvider::class,
    ProductCatalogServiceProvider::class,
    ProductBrandServiceProvider::class,
    ProductTypeServiceProvider::class,
    ProductPresentationServiceProvider::class,
];
