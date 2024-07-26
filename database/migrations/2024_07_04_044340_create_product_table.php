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
        Schema::create('product', function (Blueprint $table) {
            $table->string('id_product', 7)->primary();
            $table->string('name_product')->nullable();
            $table->string('desc_product');
            $table->decimal('unit_price', 10, 2);
            $table->string('id_brand', 20)->index();
            $table->string('id_category', 20)->index();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product');
    }
};