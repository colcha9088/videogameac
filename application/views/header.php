<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Game-AC</title>
    <link rel="icon" type="imagen/jpg" href="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQGXm0RCiBIGiXmxtAj1RqzD1XDMSMCZIuubA&usqp=CAU">

            <!-- importacion de jquerry -->
        <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
          		<!-- importacion de bootstrap -->
          		<!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

        <!-- Latest compiled and minified JavaScript -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
     
  </head>
  <body>

    <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">

        <div class="text-center">
          <img src="<?php echo base_url() ?>/assets/images/logo.png" alt="Logo" width="65" height="65" class="img-circle">
        </div>
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand text-center" href="<?php echo site_url(); ?>"><h6>VideoGameAC <br> feliz</h6></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="<?php echo site_url(); ?>">Inicio <span class="sr-only">(current)</span></a></li>
        <!-- <li><a href="#">Incio</a></li> -->
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> Juegos <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="<?php echo site_url("") ?>">Gestion de Video Juegos </a></li>
            <li><a href="<?php echo site_url("") ?>">Nuevo Video Juego</a></li>
          </ul>
        </li>
      </ul>

      <ul class="nav navbar-nav ">
        <li class="dropdown">

            <li><a href="<?php  echo site_url("")?>">Tienda</a></li>

      <ul class="nav navbar-nav">

        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> Consolas <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="<?php echo site_url("") ?>">Listado de consolas</a></li>
            <li><a href="<?php echo site_url("") ?>">Nueva consola</a></li>
          </ul>
        </li>
      </ul>


      <ul class="nav navbar-nav">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> Usuarios <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="<?php echo site_url("") ?>">Listado de usuarios</a></li>
            <li><a href="<?php echo site_url("") ?>">Nuevo usuario</a></li>
          </ul>
        </li>
      </ul>

      <ul class="nav navbar-nav">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> Calificaciones <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="<?php echo site_url("") ?>">calificaciones</a></li>
            <li><a href="<?php echo site_url("") ?>">nueva calificacion</a></li>
          </ul>
        </li>
      </ul>

      <ul class="nav navbar-nav">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> Game pass <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="<?php echo site_url("") ?>">Listado de Game pass</a></li>
            <li><a href="<?php echo site_url("") ?>">Nuevo game pass</a></li>
          </ul>
        </li>
      </ul>

      <ul class="nav navbar-nav">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> Accesorios <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="<?php echo site_url("") ?>">Listado de accesorios</a></li>
            <li><a href="<?php echo site_url("") ?>">Nuevo accesorio</a></li>
          </ul>
        </li>
      </ul>

      <form class="navbar-form navbar-left">
        <div class="form-group">
          <input type="text" class="glyphicon glyphicon-search form-control" placeholder="Buscar">
        </div>
        <button type="submit" class="btn btn-default">Buscar</button>
      </form>

    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
