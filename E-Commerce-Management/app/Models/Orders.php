<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    use HasFactory;

    protected $table = 'orders';

    protected $primaryKey = 'id_order';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $fillable = [
        'id_customer',
        'order_status_order',
        'total_price_order',
        'id_payment',
        'id_shipment',
    ];

    public function shipments(){
        return $this->hasMany(Shipments::class);
    }
}
