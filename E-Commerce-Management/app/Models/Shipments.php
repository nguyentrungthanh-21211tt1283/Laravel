<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shipments extends Model
{
    use HasFactory;
    
    protected $table = 'shipments';

    protected $primaryKey = 'id_shipment';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $fillable = [
        'id_order',
        'shipment_status',
        'shipment_date',
        'delivery_date_shipment',
        'tracking_number_shipment',
        'carrier_shipment',
    ];

    public function others(){
        return $this->belongsTo(Orders::class);
    }
}
