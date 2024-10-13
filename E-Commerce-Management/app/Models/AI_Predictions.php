<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AI_Predictions extends Model
{
    use HasFactory;

    protected $table = 'ai_predictions';

    protected $primaryKey = 'id_ai_prediction';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

     protected $fillable = [
        'prediction_type_ai_prediction',
        'related_ai_prediction',
        'prediction_value_ai_prediction',
        'confidence_ai_prediction',
        'predicted_at_ai_prediction',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array
     */

    protected $casts = [
        'confidence_ai_prediction' => 'float',
        'predicted_at_ai_prediction' => 'datetime',
    ];

    public function products(){
        return $this->belongsTo(Products::class);
    }
}
