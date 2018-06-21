<?php
include("connect_db.php");
$nombre= $_POST['nombre'];
$rut= $_POST['rut'];

$query="INSERT INTO profesor(rut, nombre) VALUES ('$rut','$nombre')";
$resultado= $mysqli->query($query);

header("Location:add_nuevos.php")

?>
