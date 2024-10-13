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
        Schema::create('ai_predictions', function (Blueprint $table) {
            $table->id('id_ai_prediction');
            $table->enum('prediction_type_ai_prediction',['sales_trend','price_suggestion']);
            $table->integer('related_ai_prediction');
            $table->string('prediction_value_ai_prediction',255);
            $table->float('confidence_ai_prediction')->nullable();
            $table->timestamp('predicted_at_ai_prediction');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ai_predictions');
    }
};
