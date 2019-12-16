@extends('main')

@section('content')
  <ul>
    <img class="logo" src="/img/logo.png" alt="Logo" id="logoentry">
  </ul>
  <nav class="navbar navbar-light bg-light" id="barrabusqueda">
    <form class="form-inline" action='/productoencontrado' method=GET>
      <input class="form-control mr-sm-2" type="search" name='busqueda' placeholder="Ejemplo de producto..." aria-label="Search">
      <button class="btn btn-primary" type="submit">Buscar</button>
    </form>
  </nav>
    </ul>
    </nav>
    <nav class="main_bar">
        <ul class="menu_productos">
        <li class="botones_productos"><a href="/vercategoria/8">Ceramica</a></li>
        <li class="botones_productos"><a href="/vercategoria/9">Cuadros</a></li>
        <li class="botones_productos"><a href="/vercategoria/10">Muebles</a></li>
        <li class="botones_productos"><a href="/vercategoria/11">Decoracion</a></li>
        <li class="botones_productos"><a href="/home">Todos los productos</a></li>
      </ul>
    </nav>
    </header>
    <br>
    {{-- <div class="container"> --}}
        <div id="myCarousel" class="carousel slide" data-ride="carousel">

        <!-- Wrapper for slides -->

          <div class="carousel-inner" id="caruselbb">
              <div class="item active">
                <img src="/img/carrusel 1.jpg" alt="" id="img1carr">
              </div>

              <div class="item">
                <img src="/img/airbaglibertad.jpg" alt="" style="width:100%;">
              </div>

              <div class="item">
                <img src="/img/lalibrava.jpg" alt="" style="width:100%;">
              </div>
            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right"></span>
              <span class="sr-only">Next</span>
            </a>
        </div>
    {{-- </div> --}}
    {{-- <div class="carrusel">
      <img src="" alt="">
    </div> --}}
@endsection
