<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('product_catalog', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id')->constrained('product_categories');
            $table->foreignId('brand_id')->nullable()->constrained('product_brands');
            $table->foreignId('type_id')->constrained('product_types');
            $table->foreignId('presentation_id')->nullable()->constrained('product_presentations');

            $table->unique(['category_id', 'brand_id', 'type_id', 'presentation_id'], 'category_brand_type_presentation_unique');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_catalog');
    }
};
