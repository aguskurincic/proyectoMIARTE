
@extends('main')
<title>Perfil Usuario</title>
@section('content')

<h1>Hola Manuel</h1>
    <article class="">
      <h1>{{$usuario->name}}</h1>
      <h2>{{$usuario->surname}}</h2>

      <img src="storage/avatar/{{Auth::user()->avatar}}" alt="">
    </article>



@endsection
