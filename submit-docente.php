<?php
include("connect_db.php");
$nombre= $_POST['nombre'];
$rut= $_POST['rut'];
if (strlen($rut)==12 or strlen($rut)==11){
$query="INSERT INTO profesor(rut, nombre) VALUES ('$rut','$nombre')";
$resultado= $mysqli->query($query);

header("Location:add_nuevos.php")
}else{
  echo "el rut ingresado no es válido";
}
?>
