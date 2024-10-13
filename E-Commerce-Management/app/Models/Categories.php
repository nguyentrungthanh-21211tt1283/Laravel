<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    use HasFactory;
    protected $table = 'categories';

    protected $primaryKey = 'id_categorie';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $fillable = [
        'name_categorie',
        'description_categorie',
    ];

    public function products(){
        return $this->hasMany(Products::class);
    }
}
