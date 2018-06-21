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
$mat_postulante=$_POST['mat_postulante'];
if(!empty($_POST['aceptar'])) {
    foreach($_POST['aceptar'] as $check) {
            $query = "UPDATE postula
                    SET seleccionado = 1
                    WHERE matricula = '".$mat_postulante."' AND codigo = '". $check ."'";
            mysqli_query($mysqli,$query);
    }
    echo "postulaciones aceptadas para  ";
    echo $mat_postulante;
}else{
  echo "no ha seleccionado a ningún ramo.";
}

?>

<body>

  <!-- Tabla de horario -->
  <div class="container">

    <a href="info_postulante.php?post_matricula=<?php echo $mat_postulante; ?>">VOLVER</a>

</body>
<?php include("pie-de-pag.php");?>
