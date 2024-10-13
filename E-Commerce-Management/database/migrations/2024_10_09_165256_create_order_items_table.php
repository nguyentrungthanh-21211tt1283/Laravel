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
        Schema::create('order_items', function (Blueprint $table) {
            $table->id('id_order_item');
            $table->unsignedBigInteger('id_order')->nullable();
            $table->foreign('id_order')->references('id_order')->on('orders')->onDelete('set null');
            $table->unsignedBigInteger('id_product')->nullable();
            $table->foreign('id_product')->references('id_product')->on('products')->onDelete('set null');
            $table->integer('quantity_order_item');
            $table->decimal('unit_price_order_item',10,2);
            $table->decimal('total_price_order_item',10,2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order_items');
    }
};
