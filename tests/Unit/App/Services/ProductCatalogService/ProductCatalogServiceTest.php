<?php

namespace Tests\Unit\Services\ProductCatalogService;

use App\Models\ProductCatalog;
use App\Services\ProductCatalogService\ProductCatalogService;
use Illuminate\Database\Eloquent\Collection as EloquentCollection;
use Mockery;
use Tests\TestCase;

class ProductCatalogServiceTest extends TestCase
{
    protected $productCatalogService;

    public function setUp(): void
    {
        parent::setUp();

        $this->productCatalogService = new ProductCatalogService;
    }

    public function test_retrieve_product_catalog_list(): void
    {
        $catalogMock = Mockery::mock('overload:'.ProductCatalog::class);
        $catalogMock->allows('with')->andReturnSelf();
        $catalogMock->allows('get')->andReturn(new EloquentCollection([
            (object) [
                'id' => 1,
                'type' => (object) ['description' => 'Sliced Bread'],
                'presentation' => (object) ['description' => 'Sliced'],
                'brand' => (object) ['name' => 'Ideal'],
                'category' => (object) ['name' => 'Bakery'],
            ],
        ]));

        $catalogList = $this->productCatalogService->getList();

        $this->assertCount(1, $catalogList);
        $this->assertEquals('Sliced Bread Sliced', $catalogList[0]['description']);
        $this->assertEquals('Ideal', $catalogList[0]['brand']);
        $this->assertEquals('Bakery', $catalogList[0]['category']);
    }

    protected function tearDown(): void
    {
        Mockery::close();
        parent::tearDown();
    }
}
