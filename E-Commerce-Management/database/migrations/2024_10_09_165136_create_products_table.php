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
            $table->id('id_product');
            $table->unsignedBigInteger('id_categorie')->nullable();
            $table->foreign('id_categorie')->references('id_categorie')->on('categories')->onDelete('set null');
            $table->string('name_product',255);
            $table->text('description_product')->nullable();
            $table->decimal('price_product',10,2);
            $table->integer('stock_quantity_product');
            $table->string('sku_product',100)->unique();
            $table->string('image_url_product',255)->nullable();            
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
