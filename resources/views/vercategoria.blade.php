@extends('main')

@section('content')
<h1>Ceramica</h1>
<article class="">
<ul>

@forelse($products as $producto)
<li>{{$categoria->producto->name}}</li>
<li>{{$categoria->producto->description}}</li>
<li>{{$categoria->producto->price}}</li>
</ul>
</article>

@endsection
