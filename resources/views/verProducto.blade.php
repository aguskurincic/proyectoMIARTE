@extends('main')

@section('content')

  <article class='producto'>
    <img class='imagen' src="/storage/product/{{$product->featured_img}}" alt="" id="verproductoimg">
    <h4 class="name">{{$product->name}}</h4>
    <p class="description">{{$product->description}}</p>
    <p class="price">Precio: {{$product->price}}$</p>

    <form class="" action="/addtocarrito" method="post">
      @csrf
      <input type="hidden" name="id" value="{{$product->id}}">
      <button type="submit" class="btn btn-success">Agregar al carrito</a>
    </form>

    <form class="" action="/editarProducto" method="post">
      @csrf
      <input type="hidden" name="id" value="{{$product->id}}">
      <button type="submit" class="btn btn-warning">Editar Producto</a>
    </form>


<form class="" action="/eliminarProducto" method="post">
  @csrf
  <input type="hidden" name="id" value="{{$product->id}}">
  <button type="submit" class="btn btn-danger">Eliminar Producto</a>
</form>
</article>

    @endsection
