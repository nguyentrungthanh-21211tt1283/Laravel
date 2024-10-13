<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order_Items extends Model
{
    use HasFactory;

    protected $table = 'order_items';

    protected $primaryKey = 'id_order_item';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $fillable = [
        'id_order',
        'id_product',
        'quantity_order_item',
        'unit_price_order_item',
        'total_price_order_item',
    ];

    public function products(){
        return $this->belongsTo(Products::class);
    }
}
