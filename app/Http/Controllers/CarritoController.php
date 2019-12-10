<?php

namespace App\Http\Controllers;

use App\Carrito;
use Auth;
use Illuminate\Http\Request;
use App\Producto;

class CarritoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $items = Carrito::where("user_id", Auth::user()->id)->where("status", 0)->get();

      return view('cart', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $product = Producto::find($request->id);
      $ultimoCarrito = Carrito::latest('order_number')->first();
      // dd($ultimoCarrito);
      $item = new Carrito;
      if($ultimoCarrito){
        $numero = $ultimoCarrito->order_number + 1;
      }else {
        $numero = 0;
      }

      $item->name = $product->name;
      $item->featured_img = $product->featured_img;
      $item->quantity = 1;
      $item->subtotal = $product->price * $item->quantity;
      $item->price = $product->price;
      $item->order_number = $numero + 1;
      $item->user_id = Auth::user()->id;

      $item->save();

      return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Carrito  $carrito
     * @return \Illuminate\Http\Response
     */
    public function show(Carrito $carrito)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Carrito  $carrito
     * @return \Illuminate\Http\Response
     */
    public function edit(Carrito $carrito)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Carrito  $carrito
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Carrito $carrito)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Carrito  $carrito
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $item = Carrito::find($request->id);
        // dd($item);
        $item->delete();

        return redirect('/carrito');
    }
}
