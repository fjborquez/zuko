<?php

namespace Tests\Unit\App\Services\ProductPresentationService;

use App\Models\ProductPresentation;
use App\Services\ProductPresentationService\ProductPresentationService;
use Illuminate\Database\Eloquent\Collection;
use Mockery;
use Tests\TestCase;

use function PHPUnit\Framework\assertEquals;

class ProductPresentationServiceTest extends TestCase
{
    private $mockedProductPresentation;

    private $productPresentationService;

    protected function setUp(): void
    {
        parent::setUp();
        $this->mockedProductPresentation = Mockery::mock('overload:App\Models\ProductPresentation');
        $this->productPresentationService = new ProductPresentationService;
    }

    public function test_should_get_list_return_a_collection(): void
    {
        $collection = new Collection;
        $collection->add(['id' => 1, 'name' => 'Soprole']);
        $collection->add(['id' => 2, 'name' => 'Colun']);
        $this->mockedProductPresentation->shouldReceive('all')->andReturn($collection);
        assertEquals(2, $this->productPresentationService->getList()->count());
    }

    public function test_should_create_a_new_product_presentation(): void
    {
        $this->mockedProductPresentation->shouldReceive('create')->andReturn(new ProductPresentation);
        $productPresentation = $this->productPresentationService->create();
        $this->assertNotNull($productPresentation);
    }
}
