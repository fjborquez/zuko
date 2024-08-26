<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ProductCatalog extends Model
{
    use HasFactory;

    protected $table = 'product_catalog';

    protected $fillable = [
        'category_id',
        'brand_id',
        'type_id',
        'presentation_id',
    ];

    protected $casts = [
        'category_id' => 'integer',
        'brand_id' => 'integer',
        'type_id' => 'integer',
        'presentation_id' => 'integer',
    ];

    public function category(): BelongsTo
    {
        return $this->belongsTo(ProductCategory::class);
    }

    public function brand(): BelongsTo
    {
        return $this->belongsTo(ProductBrand::class);
    }

    public function type(): BelongsTo
    {
        return $this->belongsTo(ProductType::class);
    }

    public function presentation(): BelongsTo
    {
        return $this->belongsTo(ProductPresentation::class);
    }
}
