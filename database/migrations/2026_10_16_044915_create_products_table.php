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
       Schema::create('products', function (Blueprint $table) {
    $table->id('product_id');
    $table->foreignId('brand_id')->constrained('brands', 'brand_id')->onDelete('cascade');
    $table->foreignId('category_id')->constrained('categories', 'category_id')->onDelete('cascade');
    $table->string('name');
    $table->text('description')->nullable();
    $table->decimal('price', 12, 2);
    $table->integer('stock')->default(0);
    $table->string('bpom_number')->nullable(); // Nomor BPOM wajib untuk skincare
    $table->string('skin_type')->nullable();   // Oily, Dry, Sensitive, All
    $table->string('skin_concern')->nullable();// Acne, Brightening, Anti-Aging
    $table->timestamps();
});
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
