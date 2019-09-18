<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ViewEdit extends Model
{
//  public function vendor(){
//        return $this->hasOne(Vendor::class);
//  }
    protected $fillable = ['product_code','language','category','list_price','price','weight','quantity','detailed_image','product_name','description','meta_keywords','meta_description'
        ,'page_title','options','short_description','vendor','brand','features','user_id','status_edit','aditional_column_name','aditional_column_value'];
//    public function user(){
//
//        return $this->belongsToMany(User::class);
//    }
}
