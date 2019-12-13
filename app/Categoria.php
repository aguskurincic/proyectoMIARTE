<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
   protected $guarded = [];

   public function producto(){
     return $this->hasMany(Producto::class, 'category_id');
   }
}
