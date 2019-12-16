<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Auth;
class Carrito extends Model
{
    protected $guarded = [];

// public function total($items){
//   // $items = Carrito::where('user_id', Auth::user()->id);
//
//   $totalcarrito = $items->reduce(function($total, $item){
//     return $total+=$item->price;
//   });
//   return $totalcarrito;
// }
}
