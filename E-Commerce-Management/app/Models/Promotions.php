<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Promotions extends Model
{
    use HasFactory;
    
    protected $table = 'promotions';

    protected $primaryKey = 'id_promotion';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $fillable = [
        'name_promotion',
        'description_promotion',
        'discount_type_promotion',
        'discount_value_promotion',
        'start_date_promotion',
        'end_date_promotion',
    ];

    public function products(){
        return $this->belongsToMany(Products::class,'product_promotion');
    }
}
