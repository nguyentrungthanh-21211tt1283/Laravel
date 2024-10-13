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
        Schema::create('orders', function (Blueprint $table) {
            $table->id('id_order');
            $table->unsignedBigInteger('id_customer')->nullable();
            $table->foreign('id_customer')->references('id_customer')->on('customers')->onDelete('set null');
            $table->enum('order_status_order',['pending','processing','completed','cancelled']);
            $table->decimal('total_price_order',10,2);
            $table->unsignedBigInteger('id_payment')->nullable();
            $table->unsignedBigInteger('id_shipment')->nullable();
            $table->timestamps();
        });
        
        Schema::table('orders', function (Blueprint $table) {
            $table->foreign('id_payment')->references('id_payment')->on('payments')->onDelete('set null');
        });
    
        Schema::table('payments', function (Blueprint $table) {
            $table->foreign('id_order')->references('id_order')->on('orders')->onDelete('set null');
        });

        Schema::table('orders', function (Blueprint $table) {
            $table->foreign('id_shipment')->references('id_shipment')->on('shipments')->onDelete('set null');
        });

        Schema::table('shipments', function (Blueprint $table) {
            $table->foreign('id_order')->references('id_order')->on('orders')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
