<?php

namespace Tests\Unit\Services\ProductCatalogService;

use App\Models\ProductCatalog;
use App\Services\ProductCatalogService\ProductCatalogService;
use Illuminate\Database\Eloquent\Collection;
use Mockery;
use Tests\TestCase;

class ProductCatalogServiceTest extends TestCase
{
    protected $productCatalogService;

    protected function setUp(): void
    {
        parent::setUp();

        $this->productCatalogService = new ProductCatalogService;
    }

    public function test_retrieve_product_catalog_list(): void
    {
        $catalogMock = Mockery::mock('overload:'.ProductCatalog::class);
        $catalog = new Collection;
        $cataloged = new ProductCatalog;
        $cataloged->id = 1;
        $cataloged->category_id = 1;
        $catalog->add($cataloged);
        $catalogMock->shouldReceive('with')->andReturnSelf();
        $catalogMock->shouldReceive('get')->andReturn($catalog);

        $catalogList = $this->productCatalogService->getList();

        $this->assertEquals(1, $catalogList->first()->id);
        $this->assertCount(1, $catalogList);
    }

    protected function tearDown(): void
    {
        Mockery::close();
        parent::tearDown();
    }
}
