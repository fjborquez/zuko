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
        Schema::dropIfExists('product_status');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::create('product_status', function (Blueprint $table) {
            $table->id();
            $table->string('description', 30)->unique();
            $table->timestamps();
        });
    }
};
