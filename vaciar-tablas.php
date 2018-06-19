<!DOCTYPE html>
<?php
include("connect_db.php");
require("connect_db.php");
$semestre=$_POST['semestre'];
$query= "SELECT matricula,codigo,seleccionado FROM postula WHERE seleccionado=1";
$ayudantes = $mysqli->query($query);
foreach($ayudantes as $values)
{
printf("INSERT INTO ayudo(matricula,codigo,codigo_semestre)
					VALUES  ( '" . $values['matricula'] . "','" . $values['codigo'] . "','$semestre')");
}

?>
<!--  $sql = "INSERT INTO ayudo(matricula,codigo,codigo_semestre)
					VALUES  ( '" . $values['matricula'] . "','" . $values['codigo'] . "','$semestre')";
  mysqli_query($mysqli,$sql);
	$query1="DELETE FROM postula";
	mysqli_query($mysqli,$query1);
	$query2="DELETE FROM dispone";
	mysqli_query($mysqli,$query2);
	header("Location:pasar_semestre.php")
