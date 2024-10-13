<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payments extends Model
{
    use HasFactory;
    
    protected $table = 'payments';

    protected $primaryKey = 'id_payment';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $fillable = [
        'id_order',
        'payment_method_payment',
        'payment_status_payment',
        'payment_date_payment',
        'amount_payment',
    ];

    public function others(){
        return $this->belongsTo(Orders::class);
    }
}
