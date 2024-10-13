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
        Schema::create('promotions', function (Blueprint $table) {
            $table->id('id_promotion');
            $table->string('name_promotion')->unique();
            $table->text('description_promotion')->nullable();
            $table->enum('discount_type_promotion',['percentage','fixed']);
            $table->decimal('discount_value_promotion',10,2);
            $table->date('start_date_promotion');
            $table->date('end_date_promotion');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('promotions');
    }
};
