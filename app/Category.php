<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categoies';
    //protected $primaryKey = 'category_id';
    protected $fillable = 'name';
}
