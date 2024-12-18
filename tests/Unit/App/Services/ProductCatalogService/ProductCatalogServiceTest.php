<?php

namespace Tests\Unit\Services\ProductCatalogService;

use App\Models\ProductCatalog;
use App\Services\ProductCatalogService\ProductCatalogService;
use Illuminate\Database\Eloquent\Collection;
use Mockery;
use Tests\TestCase;

use function PHPUnit\Framework\assertInstanceOf;

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

    public function test_create_new_product(): void
    {
        $catalogMock = Mockery::mock('overload:'.ProductCatalog::class);
        $catalogMock->shouldReceive('create')->andReturn(new ProductCatalog);
        assertInstanceOf(ProductCatalog::class, $this->productCatalogService->create([
            'category_id' => 1,
            'brand_id' => 1,
            'type_id' => 1,
            'presentation_id' => 1,
        ]));
    }

    protected function tearDown(): void
    {
        Mockery::close();
        parent::tearDown();
    }
}
