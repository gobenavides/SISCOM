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
$codigo=$_POST['codigo'];
if(!empty($_POST['aceptar'])) {
    foreach($_POST['aceptar'] as $check) {
            $query = "UPDATE postula
                    SET seleccionado = 1
                    WHERE matricula = '".$check."' AND codigo = '". $codigo ."'";
            mysqli_query($mysqli,$query);
    }
    echo "postulaciones aceptadas para  ";
    echo $codigo;
}else{
  echo "No ha seleccionado a ningún postulante.";
}

?>

<body>

  <!-- Tabla de horario -->
  <div class="container">

    <form action='postulantes_de_ramo.php' method=post>
      <input type="hidden" name="codigo_ramo" value="<?php echo $_POST["codigo"]; ?>">
      <p><input type="submit" value="¿Regresar?"></p></form>

</body>
<?php include("pie-de-pag.php");?>
