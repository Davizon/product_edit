<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Option extends Model
{
    protected $fillable = ['color', 'brand','size','material','piece','product_code','user_id'];
}
