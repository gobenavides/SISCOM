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
            <li><a href="Ingredientes.html">Algo que aún no se me ocurre jaja</a></li>


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
$semestre=$_POST['semestre'];
$ramo= $_POST['ramo'];
$profes[]= $_POST['profes'];
foreach($profes[0] as $values)
{
  $sql = "INSERT INTO dicta(codigo,rut,codigo_semestre) VALUES  ('$ramo','$values','$semestre')";
  mysqli_query($mysqli,$sql);
}
$query2="DELETE FROM tiene WHERE tiene.codigo='".$ramo."'";
mysqli_query($mysqli,$query2);
if(isset($_POST['1-lunes'])){
$hora1="INSERT INTO tiene(codigo,dia,hora) VALUES ('$ramo','LUNES','8:15:00')";
mysqli_query($mysqli,$hora1);
}
if(isset($_POST['2-lunes'])){
$hora2="INSERT INTO tiene(codigo,dia,hora) VALUES ('$ramo','LUNES','9:15:00')";
mysqli_query($mysqli,$hora2);
}
if(isset($_POST['3-lunes'])){
$hora3="INSERT INTO tiene(codigo,dia,hora) VALUES ('$ramo','LUNES','10:15:00')";
mysqli_query($mysqli,$hora3);
}
if(isset($_POST['4-lunes'])){
$hora4="INSERT INTO tiene(codigo,dia,hora) VALUES ('$ramo','LUNES','11:15:00')";
mysqli_query($mysqli,$hora4);
}
if(isset($_POST['5-lunes'])){
$hora5="INSERT INTO tiene(codigo,dia,hora) VALUES ('$ramo','LUNES','12:15:00')";
mysqli_query($mysqli,$hora5);
}
if(isset($_POST['6-lunes'])){
$hora6="INSERT INTO tiene(codigo,dia,hora) VALUES ('$ramo','LUNES','13:15:00')";
mysqli_query($mysqli,$hora6);
}
if(isset($_POST['7-lunes'])){
$hora7="INSERT INTO tiene(codigo,dia,hora) VALUES ('$ramo','LUNES','14:15:00')";
mysqli_query($mysqli,$hora7);
}
if(isset($_POST['8-lunes'])){
$hora8="INSERT INTO tiene(codigo,dia,hora) VALUES ('$ramo','LUNES','15:15:00')";
mysqli_query($mysqli,$hora8);
}
if(isset($_POST['9-lunes'])){
$hora9="INSERT INTO tiene(codigo,dia,hora) VALUES ('$ramo','LUNES','16:15:00')";
mysqli_query($mysqli,$hora9);
}
if(isset($_POST['10-lunes'])){
$hora10="INSERT INTO tiene(codigo,dia,hora) VALUES ('$ramo','LUNES','17:15:00')";
mysqli_query($mysqli,$hora10);
}
if(isset($_POST['11-lunes'])){
$hora11="INSERT INTO tiene(codigo,dia,hora) VALUES ('$ramo','LUNES','18:15:00')";
mysqli_query($mysqli,$hora11);
}
if(isset($_POST['12-lunes'])){
$hora12="INSERT INTO tiene(codigo,dia,hora) VALUES ('$ramo','LUNES','19:15:00')";
mysqli_query($mysqli,$hora12);
}
if(isset($_POST['13-lunes'])){
$hora13="INSERT INTO tiene(codigo,dia,hora) VALUES ('$ramo','LUNES','20:15:00')";
mysqli_query($mysqli,$hora13);
}
if(isset($_POST['1-martes'])){
$hora14="INSERT INTO tiene(codigo,dia,hora) VALUES ('$ramo','MARTES','8:15:00')";
mysqli_query($mysqli,$hora14);
}
if(isset($_POST['2-martes'])){
$hora15="INSERT INTO tiene(codigo,dia,hora) VALUES ('$ramo','MARTES','9:15:00')";
mysqli_query($mysqli,$hora15);
}
if(isset($_POST['3-martes'])){
$hora16="INSERT INTO tiene(codigo,dia,hora) VALUES ('$ramo','MARTES','10:15:00')";
mysqli_query($mysqli,$hora16);
}
if(isset($_POST['4-martes'])){
$hora17="INSERT INTO tiene(codigo,dia,hora) VALUES ('$ramo','MARTES','11:15:00')";
mysqli_query($mysqli,$hora17);
}
if(isset($_POST['5-martes'])){
$hora18="INSERT INTO tiene(codigo,dia,hora) VALUES ('$ramo','MARTES','12:15:00')";
mysqli_query($mysqli,$hora18);
}
if(isset($_POST['6-martes'])){
$hora19="INSERT INTO tiene(codigo,dia,hora) VALUES ('$ramo','MARTES','13:15:00')";
mysqli_query($mysqli,$hora19);
}
if(isset($_POST['7-martes'])){
$hora20="INSERT INTO tiene(codigo,dia,hora) VALUES ('$ramo','MARTES','14:15:00')";
mysqli_query($mysqli,$hora20);
}
if(isset($_POST['8-martes'])){
$hora21="INSERT INTO tiene(codigo,dia,hora) VALUES ('$ramo','MARTES','15:15:00')";
mysqli_query($mysqli,$hora21);
}
if(isset($_POST['9-martes'])){
$hora22="INSERT INTO tiene(codigo,dia,hora) VALUES ('$ramo','MARTES','16:15:00')";
mysqli_query($mysqli,$hora22);
}
if(isset($_POST['10-martes'])){
$hora23="INSERT INTO tiene(codigo,dia,hora) VALUES ('$ramo','MARTES','17:15:00')";
mysqli_query($mysqli,$hora23);
}
if(isset($_POST['11-martes'])){
$hora24="INSERT INTO tiene(codigo,dia,hora) VALUES ('$ramo','MARTES','18:15:00')";
mysqli_query($mysqli,$hora24);
}
if(isset($_POST['12-martes'])){
$hora25="INSERT INTO tiene(codigo,dia,hora) VALUES ('$ramo','MARTES','19:15:00')";
mysqli_query($mysqli,$hora25);
}
if(isset($_POST['13-martes'])){
$hora26="INSERT INTO tiene(codigo,dia,hora) VALUES ('$ramo','MARTES','20:15:00')";
mysqli_query($mysqli,$hora26);
}
if(isset($_POST['1-miercoles'])){
$hora27="INSERT INTO tiene(codigo,dia,hora) VALUES ('$ramo','MIERCOLES','8:15:00')";
mysqli_query($mysqli,$hora27);
}
if(isset($_POST['2-miercoles'])){
$hora28="INSERT INTO tiene(codigo,dia,hora) VALUES ('$ramo','MIERCOLES','9:15:00')";
mysqli_query($mysqli,$hora28);
}
if(isset($_POST['3-miercoles'])){
$hora29="INSERT INTO tiene(codigo,dia,hora) VALUES ('$ramo','MIERCOLES','10:15:00')";
mysqli_query($mysqli,$hora29);
}
if(isset($_POST['4-miercoles'])){
$hora30="INSERT INTO tiene(codigo,dia,hora) VALUES ('$ramo','MIERCOLES','11:15:00')";
mysqli_query($mysqli,$hora30);
}
if(isset($_POST['5-miercoles'])){
$hora31="INSERT INTO tiene(codigo,dia,hora) VALUES ('$ramo','MIERCOLES','12:15:00')";
mysqli_query($mysqli,$hora31);
}
if(isset($_POST['6-miercoles'])){
$hora32="INSERT INTO tiene(codigo,dia,hora) VALUES ('$ramo','MIERCOLES','13:15:00')";
mysqli_query($mysqli,$hora32);
}
if(isset($_POST['7-miercoles'])){
$hora33="INSERT INTO tiene(codigo,dia,hora) VALUES ('$ramo','MIERCOLES','14:15:00')";
mysqli_query($mysqli,$hora33);
}
if(isset($_POST['8-miercoles'])){
$hora34="INSERT INTO tiene(codigo,dia,hora) VALUES ('$ramo','MIERCOLES','15:15:00')";
mysqli_query($mysqli,$hora34);
}
if(isset($_POST['9-miercoles'])){
$hora35="INSERT INTO tiene(codigo,dia,hora) VALUES ('$ramo','MIERCOLES','16:15:00')";
mysqli_query($mysqli,$hora35);
}
if(isset($_POST['10-miercoles'])){
$hora36="INSERT INTO tiene(codigo,dia,hora) VALUES ('$ramo','MIERCOLES','17:15:00')";
mysqli_query($mysqli,$hora36);
}
if(isset($_POST['11-miercoles'])){
$hora37="INSERT INTO tiene(codigo,dia,hora) VALUES ('$ramo','MIERCOLES','18:15:00')";
mysqli_query($mysqli,$hora37);
}
if(isset($_POST['12-miercoles'])){
$hora38="INSERT INTO tiene(codigo,dia,hora) VALUES ('$ramo','MIERCOLES','19:15:00')";
mysqli_query($mysqli,$hora38);
}
if(isset($_POST['13-miercoles'])){
$hora39="INSERT INTO tiene(codigo,dia,hora) VALUES ('$ramo','MIERCOLES','20:15:00')";
mysqli_query($mysqli,$hora39);
}
if(isset($_POST['1-jueves'])){
$hora40="INSERT INTO tiene(codigo,dia,hora) VALUES ('$ramo','JUEVES','8:15:00')";
mysqli_query($mysqli,$hora40);
}
if(isset($_POST['2-jueves'])){
$hora41="INSERT INTO tiene(codigo,dia,hora) VALUES ('$ramo','JUEVES','9:15:00')";
mysqli_query($mysqli,$hora41);
}
if(isset($_POST['3-jueves'])){
$hora42="INSERT INTO tiene(codigo,dia,hora) VALUES ('$ramo','JUEVES','10:15:00')";
mysqli_query($mysqli,$hora42);
}
if(isset($_POST['4-jueves'])){
$hora43="INSERT INTO tiene(codigo,dia,hora) VALUES ('$ramo','JUEVES','11:15:00')";
mysqli_query($mysqli,$hora43);
}
if(isset($_POST['5-jueves'])){
$hora44="INSERT INTO tiene(codigo,dia,hora) VALUES ('$ramo','JUEVES','12:15:00')";
mysqli_query($mysqli,$hora44);
}
if(isset($_POST['6-jueves'])){
$hora45="INSERT INTO tiene(codigo,dia,hora) VALUES ('$ramo','JUEVES','13:15:00')";
mysqli_query($mysqli,$hora45);
}
if(isset($_POST['7-jueves'])){
$hora46="INSERT INTO tiene(codigo,dia,hora) VALUES ('$ramo','JUEVES','14:15:00')";
mysqli_query($mysqli,$hora46);
}
if(isset($_POST['8-jueves'])){
$hora47="INSERT INTO tiene(codigo,dia,hora) VALUES ('$ramo','JUEVES','15:15:00')";
mysqli_query($mysqli,$hora47);
}
if(isset($_POST['9-jueves'])){
$hora48="INSERT INTO tiene(codigo,dia,hora) VALUES ('$ramo','JUEVES','16:15:00')";
mysqli_query($mysqli,$hora48);
}
if(isset($_POST['10-jueves'])){
$hora49="INSERT INTO tiene(codigo,dia,hora) VALUES ('$ramo','JUEVES','17:15:00')";
mysqli_query($mysqli,$hora49);
}
if(isset($_POST['11-jueves'])){
$hora50="INSERT INTO tiene(codigo,dia,hora) VALUES ('$ramo','JUEVES','18:15:00')";
mysqli_query($mysqli,$hora50);
}
if(isset($_POST['12-jueves'])){
$hora51="INSERT INTO tiene(codigo,dia,hora) VALUES ('$ramo','JUEVES','19:15:00')";
mysqli_query($mysqli,$hora51);
}
if(isset($_POST['13-jueves'])){
$hora52="INSERT INTO tiene(codigo,dia,hora) VALUES ('$ramo','JUEVES','20:15:00')";
mysqli_query($mysqli,$hora52);
}
if(isset($_POST['1-viernes'])){
$hora53="INSERT INTO tiene(codigo,dia,hora) VALUES ('$ramo','VIERNES','8:15:00')";
mysqli_query($mysqli,$hora53);
}
if(isset($_POST['2-viernes'])){
$hora54="INSERT INTO tiene(codigo,dia,hora) VALUES ('$ramo','VIERNES','9:15:00')";
mysqli_query($mysqli,$hora54);
}
if(isset($_POST['3-viernes'])){
$hora55="INSERT INTO tiene(codigo,dia,hora) VALUES ('$ramo','VIERNES','10:15:00')";
mysqli_query($mysqli,$hora55);
}
if(isset($_POST['4-viernes'])){
$hora56="INSERT INTO tiene(codigo,dia,hora) VALUES ('$ramo','VIERNES','11:15:00')";
mysqli_query($mysqli,$hora56);
}
if(isset($_POST['5-viernes'])){
$hora57="INSERT INTO tiene(codigo,dia,hora) VALUES ('$ramo','VIERNES','12:15:00')";
mysqli_query($mysqli,$hora57);
}
if(isset($_POST['6-viernes'])){
$hora58="INSERT INTO tiene(codigo,dia,hora) VALUES ('$ramo','VIERNES','13:15:00')";
mysqli_query($mysqli,$hora58);
}
if(isset($_POST['7-viernes'])){
$hora59="INSERT INTO tiene(codigo,dia,hora) VALUES ('$ramo','VIERNES','14:15:00')";
mysqli_query($mysqli,$hora59);
}
if(isset($_POST['8-viernes'])){
$hora60="INSERT INTO tiene(codigo,dia,hora) VALUES ('$ramo','VIERNES','15:15:00')";
mysqli_query($mysqli,$hora60);
}
if(isset($_POST['9-viernes'])){
$hora61="INSERT INTO tiene(codigo,dia,hora) VALUES ('$ramo','VIERNES','16:15:00')";
mysqli_query($mysqli,$hora61);
}
if(isset($_POST['10-viernes'])){
$hora62="INSERT INTO tiene(codigo,dia,hora) VALUES ('$ramo','VIERNES','17:15:00')";
mysqli_query($mysqli,$hora62);
}
if(isset($_POST['11-viernes'])){
$hora63="INSERT INTO tiene(codigo,dia,hora) VALUES ('$ramo','VIERNES','18:15:00')";
mysqli_query($mysqli,$hora63);
}
if(isset($_POST['12-viernes'])){
$hora64="INSERT INTO tiene(codigo,dia,hora) VALUES ('$ramo','VIERNES','19:15:00')";
mysqli_query($mysqli,$hora64);
}
if(isset($_POST['13-viernes'])){
$hora65="INSERT INTO tiene(codigo,dia,hora) VALUES ('$ramo','VIERNES','20:15:00')";
mysqli_query($mysqli,$hora65);
}
?>
<body>
  <div class="container">
    <big> Información de ramo actualizada exitosamente.</big>
    <form action='pasar_semestre.php' method=post>
      <div class="form-group">
      <big>¿Desea actualizar más ramos?</big>
      <button align="right" type=" button" class="btn">volver</button></form>
    </div>
  </body>
<!--
