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
        Schema::create('payments', function (Blueprint $table) {
            $table->id('id_payment');
            $table->unsignedBigInteger('id_order')->nullable();
            $table->enum('payment_method_payment',['credit_card','paypal','bank_transfer']);
            $table->enum('payment_status_payment',['pending','completed','failed']);
            $table->timestamp('payment_date_payment')->nullable();
            $table->decimal('amount_payment',10,2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payments');
    }
};
