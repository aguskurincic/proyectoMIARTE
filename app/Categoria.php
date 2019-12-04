<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
   protected $guarded = [];

   public function category(){
     return $this->hasMany('App\Producto', 'product_id');
   }
}
