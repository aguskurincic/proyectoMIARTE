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
 <link rel="stylesheet" href="css/tpfinal.css">
    <title>Ecomerce</title>
  </head>
  <body>
    <header>
      <img class="logo" src="img/logo.png" alt="Logo">
      <nav class ="top_bar">
        <ul class="menu_bar">
          <!-- SI EL USUARIO NO ESTA LOG -->
        <!-- <li class="botones"><a href="index.php">Home</a></li> -->
        <li class="botones"><a href="registro.php">Register</a></li>
        <li class="botones"><a href="login.php">Login</a></li>
        <li class="botones"><a href="#"><i class="fa fa-cart-plus"></i></i></a></li>
        <!-- SI NO -->
          <div class="">
            <img class="avatar" src="avatar/.jpg" alt="">
            <span>Hola: NOMBRE USUARIO</span>
            <a href="usuarios.php">ver usuarios</a>
          </div>
          <a class="btn btn-danger" href="logout.php">Logout</a>
        <!--  -->
      </ul>
    </nav>
      <nav class="main_bar">
          <ul class="menu_productos">
          <li class="botones_productos"><a href="#">Ceramica</a></li>
          <li class="botones_productos"><a href="#">Cuadros</a></li>
          <li class="botones_productos"><a href="#">Muebles</a></li>
          <li class="botones_productos"><a href="#">Decoracion</a></li>
        </ul>
      </nav>
    </header>
  <body>
        @yield('content');
  </body>
  <footer>
    <nav class ="footer_bar">
      <ul class="footer_menu_bar">
      <li class="botones"><a href="#"><i class="fa fa-facebook-square"></i></a></li>
      <li class="botones"><a href="#"><i class="fa fa-instagram"></i></a></li>
      <li class="botones"><a href="#"><i class="fa fa-pinterest"></i></a></li>
      <li class="botones"><a href="#"><i class="fa fa-cart-plus"></i></a></li>
    </ul>
  </nav>
  </footer>

</html>
