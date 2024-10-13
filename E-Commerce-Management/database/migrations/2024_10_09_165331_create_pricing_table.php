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
        Schema::create('pricing', function (Blueprint $table) {
            $table->id('id_pricing');
            $table->unsignedBigInteger('id_product')->nullable();
            $table->foreign('id_product')->references('id_product')->on('products')->onDelete('set null');
            $table->date('date_pricing');
            $table->decimal('price_pricing',10,2);
            $table->decimal('adjusted_price_pricing',10,2)->nullable();
            $table->text('reason_pricing')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pricing');
    }
};
