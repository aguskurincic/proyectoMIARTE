
@extends('main')
<!-- <title>Perfil Usuario</title> -->
@section('content')

<h1>Hola Manuel</h1>
    <article class="">
      <h1>{{$usuario->name}}</h1>
      <h2>{{$usuario->surname}}</h2>

      <img src="storage/avatar/{{Auth::user()->avatar}}" alt="">
    </article>

    <!-- <article class="">


    <form class="" action="/addtocarrito" method="post">
      @csrf
      <input type="hidden" name="id" value="{{$product->id}}">
      <button type="submit" class="btn btn-success">Ver Mi Carrito</a>
    </form>
    </article>
    <article>
    <form class="" action="/eliminarProducto" method="post">
      @csrf
      <input type="hidden" name="id" value="{{$product->id}}">
      <button type="submit" class="btn btn-danger">Eliminar Producto</a>
    </form>
    </article> -->


@endsection

















@endsection
