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
        Schema::create('shipments', function (Blueprint $table) {
            $table->id('id_shipment');
            $table->unsignedBigInteger('id_order')->nullable();
            $table->enum('shipment_status',['pending','shipped','delivered','returned']);
            $table->timestamp('shipment_date')->nullable();
            $table->timestamp('delivery_date_shipment')->nullable();
            $table->string('tracking_number_shipment',100)->unique()->nullable();
            $table->string('carrier_shipment', 255)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('shipments');
    }
};
