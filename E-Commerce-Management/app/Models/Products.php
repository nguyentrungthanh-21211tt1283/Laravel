<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;
    
    protected $table = 'products';

    protected $primaryKey = 'id_product';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $fillable = [
        'id_categorie',
        'name_product',
        'description_product',
        'price_product',
        'stock_quantity_product',
        'sku_product',
        'image_url_product',
    ];

    public function promotions(){
        return $this->belongsTo(Promotions::class,'product_promotion');
    }
    public function category(){
        return $this->belongsTo(Category::class);
    }
    public function order_Items(){
        return $this->hasMany(Order_Items::class);
    }
    public function reviews(){
        return $this->hasMany(Reviews::class);
    }
    public function salesData(){
        return $this->hasMany(Sales_Data::class);
    }
    public function pricing(){
        return $this->hasMany(Pricing::class);
    }
    public function aiPredictions(){
        return $this->hasMany(AI_Predictions::class);
    }
}
