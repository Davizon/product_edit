<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vendor extends Model
{
    public function viewEdits(){
        return $this->hasMany(ViewEdit::class);
    }
}
