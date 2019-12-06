<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $guarded = [];

    // public function user(){
    //   return $this->belongsTo('App\User', 'user_id');
    // }
    //  public function photos(){
    //    return $this->hasMany('App\ImagesProducts', 'product_id');
    //  }
}
