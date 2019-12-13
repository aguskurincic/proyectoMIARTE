
@extends('main')
<!-- <title>Perfil Usuario</title> -->
@section('content')

    <article class="">
      <h1>{{$usuario->name}}</h1>
      <h2>{{$usuario->surname}}</h2>

      <img src="storage/avatar/{{Auth::user()->avatar}}" alt="">
    </article>

<<<<<<< HEAD
=======

>>>>>>> 8e6d02e34bff182b0e1601077489077d318d9c55

@endsection
