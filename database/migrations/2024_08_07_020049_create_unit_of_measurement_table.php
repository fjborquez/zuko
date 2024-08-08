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
        Schema::create('unit_of_measurement', function (Blueprint $table) {
            $table->id();
            $table->string('description', 30)->unique();
            $table->string('abbreviation', 10)->unique();
            $table->foreignId('category_id')->constrained('unit_categories');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('unit_of_measurement');
    }
};