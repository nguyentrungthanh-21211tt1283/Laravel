<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sales_Data extends Model
{
    use HasFactory;
    
    protected $table = 'sales_data';

    protected $primaryKey = 'id_sales_data';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $fillable = [
        'id_product',
        'date_sales_data',
        'quantity_sold_sales_data',
        'revenue_sales_data',
    ];
}
