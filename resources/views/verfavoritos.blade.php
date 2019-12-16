@extends('main')

@section('content')

<div class="buttons">
  <article class='producto'>
      <img class='imagen' src="/storage/product/{{$producto->featured_img}}" alt="" id="verproductoimg">
      <h4 class="name">{{$producto->name}}</h4>
      <p class="description">{{$producto->description}}</p>
      <p class="price">Precio: {{$producto->price}}$</p>
</article>

<form class="buttoncolor" action="/addtocarrito" method="post">
  @csrf
  <input type="hidden" name="id" value="{{$producto->id}}">
  <button type="submit" class="btn btn-success" id="colorbtn">Agregar al carrito</a>
</form>
</div>

@endsection
