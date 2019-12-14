<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Producto;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
      $products = Producto::all();
      return view('home', compact('products'));
    }

    public function entry(){
      return view('entry');
    }

    public function buscar(Request $request){
      $products = Producto::where('name', like($request), "%")->get();

      return view ('productoencontrado', compact('products'));
    }
}
