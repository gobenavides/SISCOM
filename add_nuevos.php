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
