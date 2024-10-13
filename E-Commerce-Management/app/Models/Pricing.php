<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pricing extends Model
{
    use HasFactory;
    
    protected $table = 'pricing';

    protected $primaryKey = 'id_pricing';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $fillable = [
        'id_product',
        'date_pricing',
        'price_pricing',
        'adjusted_price_pricing',
        'reason_pricing',
    ];

    public function products(){
        return $this->belongsTo(Products::class);
    }
}
