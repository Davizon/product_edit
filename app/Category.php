<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['category', 'Subcategory_1','Subcategory_2','Subcategory_3','Subcategory_4','product_code','user_id'];
}
