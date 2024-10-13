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
        Schema::create('reviews', function (Blueprint $table) {
            $table->id('id_review');
            $table->unsignedBigInteger('id_product')->nullable();
            $table->foreign('id_product')->references('id_product')->on('products')->onDelete('set null');
            $table->unsignedBigInteger('id_customer')->nullable();
            $table->foreign('id_customer')->references('id_customer')->on('customers')->onDelete('set null');
            $table->integer('rating');
            $table->text('comment_review'); 
            $table->timestamps();
        });
        DB::statement('ALTER TABLE reviews ADD CONSTRAINT rating_check CHECK (rating >= 1 AND rating <= 5)');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reviews');
    }
};
