<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $guarded = [];

    public function user(){
      return $this->belongsTo(User::class, 'user_id');
    }
    //  public function photos(){
    //    return $this->hasMany('App\ImagesProducts', 'product_id');
    //  }

    public function categoria(){
      return $this->belongsTo(Categoria::class, 'category_id');
    }
}
