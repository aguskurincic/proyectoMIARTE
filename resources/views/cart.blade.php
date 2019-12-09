@extends('main')

@section('content')
<div class="container">
    <h1>Mi Carrito</h1>
    <h2>Lista de productos</h2>

    @forelse ($items as $product)
      <article>
        <img src="/storage/product/{{$product->featured_img}}" alt="">
        <h4 class="name">{{$product->name}}</h4>
        <p class="description">{{$product->description}}</p>
        <p class="price">Precio: {{$product->price}}$</p>
        <form class="" action="/sacarDeCarrito" method="post">
          @csrf
          <input type="hidden" name="id" value="{{$product->id}}">
          <button type="submit" class="btn btn-danger">Sacar de carrito</a>
        </form>


      </article>
    @empty
      <p>No hay productos disponibles</p>
    @endforelse




</div>
@endsection