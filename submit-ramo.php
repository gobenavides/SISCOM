<?php
include("connect_db.php");
$nombre= $_POST['nombre'];
$codigo= $_POST['codigo'];

$query="INSERT INTO ramo(codigo, nombre) VALUES ('$codigo','$nombre')";
$resultado= $mysqli->query($query);

header("Location:add_nuevos.php")

?>
