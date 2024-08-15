<?php

namespace Tests\Unit\App\Services\ProductCategoryService;

use App\Models\ProductCategory;
use App\Services\ProductCategoryService\ProductCategoryService;
use Illuminate\Database\Eloquent\Collection;
use Mockery;
use Tests\TestCase;

use function PHPUnit\Framework\assertInstanceOf;

class ProductCategoryServiceTest extends TestCase
{
    private $mockedProductCategory;

    private $productCategoryService;

    public function setUp(): void
    {
        parent::setUp();
        $this->mockedProductCategory = Mockery::mock(ProductCategory::class)->makePartial();
        $this->productCategoryService = new ProductCategoryService($this->mockedProductCategory);
    }

    public function test_should_getList_return_a_collection(): void
    {
        $this->mockedProductCategory->shouldReceive('all')->once()->andReturn(new Collection);
        assertInstanceOf(Collection::class, $this->productCategoryService->getList());
    }
}
