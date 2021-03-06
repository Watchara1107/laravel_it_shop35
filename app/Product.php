<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';
    //protected $primaryKey = 'product_id';
    protected $fillable = [
        'name',
        'description',
        'image',
        'price',
        'category_id'
    ];
}
