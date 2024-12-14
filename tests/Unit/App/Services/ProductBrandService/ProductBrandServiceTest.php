<?php

namespace Tests\Unit\App\Services\ProductBrandService;

use App\Services\ProductBrandService\ProductBrandService;
use Illuminate\Database\Eloquent\Collection;
use Mockery;
use Tests\TestCase;

use function PHPUnit\Framework\assertEquals;

class ProductBrandServiceTest extends TestCase
{
    private $mockedProductBrand;

    private $productBrandService;

    protected function setUp(): void
    {
        parent::setUp();
        $this->mockedProductBrand = Mockery::mock('overload:App\Models\ProductBrand');
        $this->productBrandService = new ProductBrandService;
    }

    public function test_should_get_list_return_a_collection(): void
    {
        $collection = new Collection;
        $collection->add(['id' => 1, 'name' => 'Soprole']);
        $collection->add(['id' => 2, 'name' => 'Colun']);
        $this->mockedProductBrand->shouldReceive('all')->andReturn($collection);
        assertEquals(2, $this->productBrandService->getList()->count());
    }
}
