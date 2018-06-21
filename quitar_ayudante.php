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
  <?php include("cabecera.php");?>
</head>


<?php
include("connect_db.php");
if(!empty($_POST['quitar'])) {
    foreach($_POST['quitar'] as $check) {
      $check=explode(":",$check);
            $query = "UPDATE postula
                    SET seleccionado = 0
                    WHERE matricula = '$check[1]' AND codigo = '$check[0]' ";
            mysqli_query($mysqli,$query);
    }
    echo "Postulaciones quitadas";
}else{
  echo "No ha seleccionado a ningún postulante.";
}

?>

<body>

  <!-- Tabla de horario -->
  <div class="container">

    <form action='contar_postulantes.php' method=post>
      <p><input type="submit" value="¿Regresar?"></p></form>

</body>
<?php include("pie-de-pag.php");?>
