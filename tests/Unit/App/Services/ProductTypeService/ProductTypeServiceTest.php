<?php

namespace Tests\Unit\App\Services\ProductTypeService;

use App\Models\ProductType;
use App\Services\ProductTypeService\ProductTypeService;
use Illuminate\Database\Eloquent\Collection;
use Mockery;
use Tests\TestCase;

use function PHPUnit\Framework\assertEmpty;
use function PHPUnit\Framework\assertEquals;

class ProductTypeServiceTest extends TestCase
{
    private $mockedProductType;

    private $productTypeService;

    protected function setUp(): void
    {
        parent::setUp();
        $this->mockedProductType = Mockery::mock('overload:App\Models\ProductType');
        $this->productTypeService = new ProductTypeService;
    }

    public function test_should_get_list_return_a_collection(): void
    {
        $collection = new Collection;
        $collection->add(['id' => 1, 'name' => 'Soprole']);
        $collection->add(['id' => 2, 'name' => 'Colun']);
        $this->mockedProductType->shouldReceive('all')->andReturn($collection);
        assertEquals(2, $this->productTypeService->getList()->count());
    }

    public function test_should_create_a_new_product_type(): void
    {
        $this->mockedProductType->shouldReceive('create')->andReturn(new ProductType);
        $productType = $this->productTypeService->create();
        $this->assertNotNull($productType);
    }
}
