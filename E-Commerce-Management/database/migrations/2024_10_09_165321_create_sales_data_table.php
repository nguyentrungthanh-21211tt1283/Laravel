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
        Schema::create('sales_data', function (Blueprint $table) {
            $table->id('id_sales_data');
            $table->unsignedBigInteger('id_product')->nullable();
            $table->foreign('id_product')->references('id_product')->on('products')->onDelete('set null');
            $table->date('date_sales_data');
            $table->integer('quantity_sold_sales_data');
            $table->decimal('revenue_sales_data',10,2);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sales_data');
    }
};
