@extends('main')

@section('content')

  <article class='producto'>
    <img class='imagen' src="/storage/product/{{$product->featured_img}}" alt="">
    <h4 class="name">{{$product->name}}</h4>
    <p class="description">{{$product->description}}</p>
    <p class="price">Precio: {{$product->price}}$</p>
</article>

    @endsection
