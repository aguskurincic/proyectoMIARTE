@extends('main')

@section('content')

<div class="buttons">
  @forelse ($productos as $producto)
  <article class='producto'>
      <img class='imagen' src="/storage/product/{{$producto->featured_img}}" alt="" id="verproductoimg">
      <h4 class="name">{{$producto->name}}</h4>
      <p class="description">{{$producto->description}}</p>
      <p class="price">Precio: {{$producto->price}}$</p>


<form class="buttoncolor" action="/addtocarrito" method="post">
  @csrf
  <input type="hidden" name="id" value="{{$producto->id}}">
  <button type="submit" class="btn btn-success" id="colorbtn">Agregar al carrito</a>

</form>
</article>
@empty
<h2>El usuario no ha seleccionado Favoritos</h2>
@endforelse

</div>

@endsection
