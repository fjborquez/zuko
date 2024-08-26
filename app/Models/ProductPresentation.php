<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductPresentation extends Model
{
    use HasFactory;

    protected $table = 'product_presentations';

    protected $fillable = ['description'];

    protected $casts = ['description' => 'string'];
}
