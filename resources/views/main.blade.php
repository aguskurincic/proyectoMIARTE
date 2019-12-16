<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Hepta+Slab|Red+Hat+Display&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Questrial&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="/css/tpfinal.css">
    <title>Ecomerce</title>
  </head>
  <body>
    <header>
      {{-- <img class="logo" src="/img/logo.png" alt="Logo"> --}}
      <nav class ="top_bar">
<<<<<<< HEAD
        <ul class="menu_bar" id="headerbar">
          <a href="/"><img src="/img/logo.png" alt="Logo" id="logohead"></a>
          <li class="botones"><a href="/">Home</a></li>
=======
        <div class="left">
          <img src="/img/logo.png" alt="Logo" id="logohead">
          <p><a href="/">Home</a></p>
        </div>

        <ul class="menu_bar" id="headerbar">
>>>>>>> 4fcfc2b5b812492029230d1160de17c681f7f30a
        @guest
          <li class="botones"><a href="/register">Regitrarse</a></li>
          <li class="botones"><a href="/login">Login</a></li>
          {{-- <li class="botones"><a href="/cargarproducto"><i class="far fa-plus"></i></a></li> --}}
          <li class="botones"><a href="#"><i class="fa fa-cart-plus"></i></a></li>
        @else
          <li class="botones"><a href="/cargarproducto">Cargar producto</a></li>
          <li class="botones"><a href="/verfavoritos">Favoritos</a></li>
          <li class="botones" ><a href="/carrito"><i class="fa fa-cart-plus"></i></i></a></li>

          <li>
            <a href="/verperfilusuario"><img class="avatar" src="/storage/avatar/{{Auth::user()->avatar}}" alt="">
            <span class='saludo'>{{Auth::user()->name}}</span></a>
          </li>

          <li>
            <!-- <a class="btn btn-danger" href="{{ route('logout') }}">Logout</a> -->
            <a style="margin-right: 5px" class="btn btn-warning" href="{{ route('logout') }}"
               onclick="event.preventDefault();
                             document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none">
                @csrf
            </form>
          </li>
        @endif
      </ul>
    </nav>
    {{-- <div class="search-bar">
      <nav class="navbar navbar-light bg-light">
        <form class="form-inline">
          <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
      </nav>
    </div> --}}
       {{-- <nav class="main_bar">
          <ul class="menu_productos">
          <li class="botones_productos"><a href="/vercategoria/8">Ceramica</a></li>
          <li class="botones_productos"><a href="/vercategoria/10">Cuadros</a></li>
          <li class="botones_productos"><a href="/vercategoria/9">Muebles</a></li>
          <li class="botones_productos"><a href="/vercategoria/11">Decoracion</a></li>
          <li class="botones_productos"><a href="/home">Todos los productos</a></li>
        </ul>
      </nav> --}}
    </header>

      @yield('content')

    <footer>
      <nav class ="footer_bar" id="footerlinks">
          <ul class="footer_menu_bar">
          <li class="botones"><a href="#"><i class="fa fa-facebook-square"></i></a></li>
          <br>
          <li class="botones"><a href="#"><i class="fa fa-instagram"></i></a></li>
          <br>
          <li class="botones"><a href="#"><i class="fa fa-pinterest"></i></a></li>
        </ul>
      </nav>
    </footer>
  </body>
</html>
