<?php
session_start();

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true) {
echo "Acceso denegado. Inicie sesión como administrador para ver esta página";
die();
}
?>

<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Sistema de Postulación a ayudantías: Sección Administrador</title>
  <link type="text/css" rel="stylesheet" href="css/bootstrap.css"  media="screen,projection"/>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/css/bootstrap-select.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <!-- Latest compiled and minified JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/js/bootstrap-select.min.js"></script>

  <!-- (Optional) Latest compiled and minified JavaScript translation files -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/js/i18n/defaults-*.min.js"></script>

        <?php include("cabecera.php");?>
</head>

<nav class="navbar navbar-default"> <!-- Todo lo que esté dentro de nav sera la barra de navegacion -->
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="administrador.php">Sección Administrador </a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav"> <!-- esto es una lista desordenada -->

        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Registrar <span class="caret"></span></a>
          <ul class="dropdown-menu"> <!-- es una lista tipo drop dawn, la clase="dropdown-menu" es un estilo que tiene bootstrap el cual añadimos en el head -->
            
            <li><a href="pasar_semestre.php">Limpiar base para pasar a semestre siguiente</a></li>
            <li role="separator" class="divider"></li> <!-- separa visualmente la lista  -->
            <li><a href="add_nuevos.php">Añadir nuevos docentes o asignaturas.</a></li>


          </ul>

        </li>
         <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Consultar <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="postulantes_del_semestre.php">Postulantes del semestre actual</a></li>


          </ul>

        </li>
      </ul>


    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
  <?php
  include("connect_db.php");
  $sql_ramos="SELECT codigo FROM ramo";
  $sql_profes="SELECT rut,nombre FROM profesor";
  $ramos = $mysqli->query($sql_ramos);
  $profes = mysqli_query($mysqli,$sql_profes);

  ?>

  <!-- tabla-->
  <body>
    <div class="container-fluid">
  <div class="row">
    <div class="col-sm-6" style="background-color:lavender;">        <h2>Añadir Docente</h2>
          	<form action='submit-docente.php' method=post>
              <div class="form-group">
                        <label>Indicar datos</label>
                        <p>Rut docente: <input type=text name=rut /></p>
                      <p>Nombre docente: <input type=text name=nombre /></p></div>
              <button align="right" type=" button" class="btn">Añadir docente</button></form></div>
    <div class="col-sm-6" style="background-color:#bbded6;"><h2>    <p>Añadir Ramo</p></h2>

    <form action="submit-ramo.php", method=post>
      <div class="form-group">
                <label>Indicar datos</label>
                <p>Código Ramo: <input type=text name=codigo /></p>
              <p>Nombre Ramo: <input type=text name=nombre /></p></div>
      <button align="right" type=" button" class="btn">Añadir ramo</button>
    </form></div>

  </div>
</div>

  </body>
  <?php include("pie-de-pag.php");?>
  </html>
