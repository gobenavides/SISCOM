<?php

   include("connect_db.php");
	$matricula= $_POST['matricula'];
	$nombre= $_POST['nombre'];
	
	$query="INSERT INTO postulante (matricula, nombre) VALUES ('$matricula','$nombre')";
	$resultado= $mysqli->query($query);
	
	if($resultado){
		header("location: ramos.php");
	}
	else{
		header("location: ramos.php");
	}
	
?>