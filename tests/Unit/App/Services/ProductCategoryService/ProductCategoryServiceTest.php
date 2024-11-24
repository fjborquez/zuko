<?php

namespace Tests\Unit\App\Services\ProductCategoryService;

use App\Services\ProductCategoryService\ProductCategoryService;
use function PHPUnit\Framework\assertEquals;
use Illuminate\Database\Eloquent\Collection;
use Mockery;
use Spatie\QueryBuilder\QueryBuilder;
use Tests\TestCase;

class ProductCategoryServiceTest extends TestCase
{
    private $mockedProductCategory;

    private $mockedQueryBuilder;

    private $productCategoryService;

    public function setUp(): void
    {
        parent::setUp();
        $this->mockedProductCategory = Mockery::mock('overload:App\Models\ProductCategory');
        $this->mockedQueryBuilder = Mockery::mock('overload:Spatie\QueryBuilder\QueryBuilder');
        $this->productCategoryService = new ProductCategoryService;
    }

    public function test_should_getList_return_a_collection(): void
    {
        $collection = new Collection;
        $collection->add(['id' => 1, 'name' => 'Bakery']);
        $collection->add(['id' => 2, 'name' => 'Dairy']);

        $this->mockedQueryBuilder->shouldReceive('for')->once()->andReturnSelf();
        $this->mockedQueryBuilder->shouldReceive('allowedSorts')->once()->andReturnSelf();
        $this->mockedQueryBuilder->shouldReceive('get')->once()->andReturn($collection);
        assertEquals(2, $this->productCategoryService->getList()->count());
    }
}
