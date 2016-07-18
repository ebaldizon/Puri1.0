<?php

  SESSION_START();
  $_SESSION['cart'] = ARRAY();

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" name="viewport" content="initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" href="Bootstrap/css/bootstrap.css" media="screen">
    <link href="Bootstrap/assets/css/bootstrap.css" rel="stylesheet">
    <link href="Bootstrap/assets/css/font-awesome.css" rel="stylesheet">
    <link href="Bootstrap/assets/css/docs.css" rel="stylesheet" >
    <link href="Bootstrap/bootstrap-social.css" rel="stylesheet" >

    <link rel="stylesheet" href="CSS/styles.css">
    <link href='https://fonts.googleapis.com/css?family=Homenaje' rel='stylesheet' type='text/css'>
    <title>Purificadores de agua - Costa Rica</title>
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-md-5">
          <br/>
          <p class="p-banner-1">CORPORACIÓN BALRY J Y E S.A.</p>
          <p class="p-banner-2">PURIFICADORES DE AGUA - COSTA RICA</p>
          <br/>
        </div>
        <div class="col-md-4">

        </div>
        <div class="col-md-3">
          <br>
          <br>
          <a class="btn btn-social-icon btn-facebook">
            <span class="fa fa-facebook"></span>
          </a>
          <a class="btn btn-social-icon btn-twitter">
            <span class="fa fa-twitter"></span>
          </a>
          <a class="btn btn-social-icon btn-google">
            <span class="fa fa-google"></span>
          </a>
          <a class="btn btn-social-icon btn-pinterest">
            <span class="fa fa-pinterest"></span>
          </a>
        </div>
      </div>

    </div>
    <nav class="navbar navbar-default">
      <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
              <span class="sr-only">Toggle navigation</span>
            </button>
          </div>
          <div class="container">
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav">
                <li><a href="../index.php">Inicio</a></li>
                <li><a href="Nosotros.php">Nosotros</a></li>
                <li class="active"><a href="#">Purificadores<span class="sr-only">(current)</span></a></li>
                <li><a href="Cocina.php">Cocina</a></li>
                <li><a href="Servicios.php">Servicios</a></li>
                <li><a href="Contactenos.php">Cont&aacute;ctenos</a></li>
              </ul>

              <ul class="nav navbar-nav navbar-right">
                <!--<li><a href="#">Link3</a></li>-->
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Mi cuenta<span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="Users/Login.php">Ingresar</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="#">Registrarse</a></li>
                  </ul>
                </li>
              </ul>
            </div><!-- /.navbar-collapse -->
          </div>
          <!-- Collect the nav links, forms, and other content for toggling -->
      </div><!-- /.container-fluid -->
    </nav>
    <div class="container main">
      <div class="row">
        <div class="col-md-12">
          <form class="navbar-form navbar-right" role="search">
            <div class="form-group">
              <input type="text" class="form-control" placeholder="">
            </div>
            <button type="submit" class="btn btn-default">Buscar</button>
          </form>
        </div><!--COL-->
      </div><!--ROW-->
      <div class="row">
        <div class="col-sm-6 col-md-4">
          <div class="thumbnail">
            <img class="img-purifiers" src="img/puri-essential.png" alt="...">
            <div class="caption">
              <h3>Essential - ‎₡250,000</h3>
              <form action="Purificadores.php">
                <input class="btn btn-primary" type="submit" name="addCar" value="Añadir el carrito" onclick="insert()" />
                <a href="Purifiers/Essential.php" class="btn btn-default" role="button">Informaci&oacute;n</a>
              </form>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4">
          <div class="thumbnail">
            <img class="img-purifiers" src="img/puri-osmosis-inversa.png" alt="...">
            <div class="caption">
              <h3>&Oacute;mosis Inversa - ‎₡450,000</h3>
              <p><a href="#" class="btn btn-primary" role="button">Añadir el carrito</a> <a href="Purifiers/OsmosisInversa.php" class="btn btn-default" role="button">Informaci&oacute;n</a></p>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4">
          <div class="thumbnail">
            <img class="img-purifiers" src="img/puri-ozono.png" alt="...">
            <div class="caption">
              <h3>Ozono - ‎₡300,000</h3>
              <p><a href="#" class="btn btn-primary" role="button">Añadir el carrito</a> <a href="Purifiers/Ozono.php" class="btn btn-default" role="button">Informaci&oacute;n</a></p>
            </div>
          </div>
        </div>
      </div><!--ROW-->

      <div class="row">
        <div class="col-sm-6 col-md-4">
          <div class="thumbnail">
            <img class="img-purifiers" src="img/puri-ultravioleta.png" alt="...">
            <div class="caption">
              <h3>Ultravioleta - ‎₡300,000</h3>
              <p><a href="#" class="btn btn-primary" role="button">Añadir el carrito</a> <a href="#" class="btn btn-default" role="button">Informaci&oacute;n</a></p>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4">
          <div class="thumbnail">
            <img class="img-purifiers" src="img/puri-dispensador.png" alt="...">
            <div class="caption">
              <h3>Dispensador - ‎₡450,000</h3>
              <p><a href="#" class="btn btn-primary" role="button">Añadir el carrito</a> <a href="Purifiers/Dispensador.php" class="btn btn-default" role="button">Informaci&oacute;n</a></p>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4">
          <div class="thumbnail">
            <img class="img-purifiers" src="img/puri-industrial.jpg" alt="...">
            <div class="caption">
              <h3>Industrial</h3>
              <p><a href="#" class="btn btn-primary" role="button">Añadir el carrito</a> <a href="#" class="btn btn-default" role="button">Informaci&oacute;n</a></p>
            </div>
          </div>
        </div>
      </div><!--ROW-->
    </div>
    <footer class="footer">
      <div class="container">
        <p class="text-muted">Puri1.0 ©</p>
      </div>
    </footer>
    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <script src="Bootstrap/js/bootstrap.js"></script>
  </body>
</html>
