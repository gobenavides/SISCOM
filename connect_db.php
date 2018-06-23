<?php



		$mysqli = new MySQLi("localhost", "root","", "proyecto");
		if ($mysqli -> connect_errno) {
			die( "Fallo la conexión a MySQL: (" . $mysqli -> mysqli_connect_errno()
				. ") " . $mysqli -> mysqli_connect_error());
		}
		$mysqli->set_charset("utf8"); /* Esto arregla el problema de los acentos*/
		//else
			//echo "Conexión exitossa!";

//	$link =mysqli_connect("localhost","root","");
//	if($link){
//		mysqli_select_db($link,"academ");
//	}
?>
