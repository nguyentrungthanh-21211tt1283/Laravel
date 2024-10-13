<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Promotion_Product extends Model
{
    use HasFactory;
    
    protected $table = 'promotion_product';

    protected $primaryKey = 'id_promotion_product';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $fillable = [
        'id_promotion',
        'id_product',
    ];
}
