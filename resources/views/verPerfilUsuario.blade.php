
@extends('main')
<title>Perfil Usuario</title>
<br>
<br>
@section('content')
<br>
<h1 class="perfilh1" align="center">PERFIL</h1>
  {{-- <h1>Perfil de usuario</h1>  --}}
    <article class="">
      <h1>Usuario: {{$usuario->name}}</h1>
      <h2>Email: {{$usuario->email}}</h2>


      <img src="storage/avatar/{{Auth::user()->avatar}}" alt="" id="imgperfil" width="50%" height="50%">

      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    </article>


    <div class="buttons">
      <h1>Mis Productos</h1>

        @forelse ($productos as $producto)
          <article class='producto'>
          <img class='imagen' src="/storage/product/{{$producto->featured_img}}" alt="" id="verproductoimg">
          <h4 class="name">{{$producto->name}}</h4>
          <p class="description">{{$producto->description}}</p>
          <p class="price">Precio: {{$producto->price}}$</p>

        <form class="buttoncolor" action="/editarProducto" method="post">
            @csrf
            <input type="hidden" name="id" value="{{$producto->id}}">
            <button type="submit" class="btn btn-warning" id="colorbtn">Editar Producto</a>
          </form>

          <form class="buttoncolor" action="/eliminarProducto" method="post">
            @csrf
            <input type="hidden" name="id" value="{{$producto->id}}">
            <button type="submit" class="btn btn-danger" id="colorbtn">Eliminar Producto</a>

          </form>
        </article>
          @empty
          <h2>No hay Productos Cargados por este Usuario</h2>
          <br>
          <br>
          @endforelse

      </div>


@endsection
