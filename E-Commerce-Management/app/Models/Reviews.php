<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reviews extends Model
{
    use HasFactory;
    
    protected $table = 'reviews';

    protected $primaryKey = 'id_review';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $fillable = [
        'id_product',
        'id_customer',
        'rating',
        'comment_review',
    ];

    public function products(){
        return $this->belongsTo(Products::class);
    }

    public function customers(){
        return $this->belongsTo(Customers::class);
    }
}
