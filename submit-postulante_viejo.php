<?php
include("connect_db.php");
$nombre= $_POST['nombre'];
$matricula= $_POST['matricula'];
$mail= $_POST['mail'];
$ramo1= $_POST['ramo1'];
$ramo2= $_POST['ramo2'];
$ramo3= $_POST['ramo3'];
$q1=mysqli_query($mysqli,"SELECT * from ramo WHERE codigo=$ramo1");
$q2=mysqli_query($mysqli,"SELECT * from ramo WHERE codigo=$ramo2");
$q3=mysqli_query($mysqli,"SELECT * from ramo WHERE codigo=$ramo3");
$nota1= $_POST['nota1'];
$nota2= $_POST['nota2'];
$nota3= $_POST['nota3'];
$ramo_cursado1= $_POST['ramo_cursado1'];
$ramo_cursado2= $_POST['ramo_cursado2'];
$ramo_cursado3= $_POST['ramo_cursado3'];
$q01=mysqli_query($mysqli,"SELECT * from ramo WHERE codigo=$ramo_cursado1");
$q02=mysqli_query($mysqli,"SELECT * from ramo WHERE codigo=$ramo_cursado2");
$q03=mysqli_query($mysqli,"SELECT * from ramo WHERE codigo=$ramo_cursado3");
if(strlen($matricula)!=10){
  echo "la matrícula ingresada no es válida.";
}
elseif( ($nota1 > 7 or $nota1 < 4) and !empty($nota1))
  {echo "nota ingresada no válida" ;}
elseif( ($nota2 > 7 or $nota2 < 4) and !empty($nota2) )
  {echo "nota ingresada no válida" ;}
elseif( ($nota3 > 7 or $nota3 < 4)  and !empty($nota3))
  {echo "nota ingresada no válida"; }
elseif (empty($ramo1))
  {echo "debe postular a al menos un ramo" ;}
elseif( mysqli_num_rows($q1)==0 )
  {echo "código ramo 1 a postular inválido" ;}
elseif(!empty($ramo2))
  {if(mysqli_num_rows($q2)==0){
    echo "código ramo 2 a postular inválido" ;}}
elseif(!empty($ramo3))
  {if(mysqli_num_rows($q3)==0){
    echo "código ramo 3 a postular inválido" ;}}
elseif (!empty($ramo_cursado1))
  {if( mysqli_num_rows($q01)==0 )
  {echo "código ramo cursado 1 inválido" ;}}
elseif(!empty($ramo_cursado2))
  {if(mysqli_num_rows($q02)==0){
    echo "código ramo cursado 2 inválido" ;}}
elseif(!empty($ramo_cursado3))
  {if(mysqli_num_rows($q03)==0){
    echo "código ramo cursado 3 inválido" ;}}
  else{
if(isset($_POST['solicitado1'])){
  $solicitado1 = 1;
}else{
  $solicitado1=0;
}
if(isset($_POST['solicitado2'])){
  $solicitado2 = 1;
}else{
  $solicitado2=0;
}
if(isset($_POST['solicitado3'])){
  $solicitado3 = 1;
}else{
  $solicitado3=0;
}
	$sql=mysqli_query($mysqli,"SELECT * FROM postulante WHERE matricula='$matricula'");
	if($f=mysqli_fetch_assoc($sql)){
    $quer = "DELETE FROM dispone WHERE dispone.matricula='".$matricula."'";
    $queryy="DELETE FROM postula WHERE postula.matricula='".$matricula."'";
    $res = $mysqli ->query($quer);
    $ress = $mysqli ->query($queryy);
		$query1="INSERT INTO postula(matricula, codigo,solicitado,seleccionado) VALUES ('$matricula','$ramo1','$solicitado1','0')";
		$resultado1= $mysqli->query($query1);
		if($resultado1){
			if(!empty($ramo2)){
				$query2="INSERT INTO postula(matricula, codigo,solicitado,seleccionado) VALUES ('$matricula','$ramo2','$solicitado2','0')";
				$resultado2= $mysqli->query($query2);
				if(!$resultado2){echo "error en la postulación (ramo 2)";}
				if(!empty($ramo3)){
					$query3="INSERT INTO postula(matricula, codigo,solicitado,seleccionado) VALUES ('$matricula','$ramo2','$solicitado2','0')";
					$resultado3= $mysqli->query($query3);
					if(!$resultado3){echo "error en la postulación (ramo 3)";}
				}
			}
			if(!empty($ramo_cursado1)){
        $r1=$mysqli->query("SELECT * FROM curso WHERE curso.matricula='$matricula' AND curso.codigo='$ramo_cursado1'");
        if (mysqli_num_rows($r1)==0){
				$query01 = "INSERT INTO curso(matricula,codigo,calificacion) VALUES ('$matricula','$ramo_cursado1','$nota1')";
				mysqli_query($mysqli,$query01);
			}}
			if(!empty($ramo_cursado2)){
        $r2=$mysqli->query("SELECT * FROM curso WHERE curso.matricula='$matricula' AND curso.codigo='$ramo_cursado2'");
        if (mysqli_num_rows($r2)==0){
				$query02 = "INSERT INTO curso(matricula,codigo,calificacion) VALUES ('$matricula','$ramo_cursado2','$nota2')";
				mysqli_query($mysqli,$query02);
			}}
			if(!empty($ramo_cursado3)){
        $r3=$mysqli->query("SELECT * FROM curso WHERE curso.matricula='$matricula' AND curso.codigo='$ramo_cursado3'");
        if (mysqli_num_rows($r3)==0){
				$query03 = "INSERT INTO curso(matricula,codigo,calificacion) VALUES ('$matricula','$ramo_cursado3','$nota3')";
				mysqli_query($mysqli,$query03);
			}}
			if(isset($_POST['1-lunes'])){
				$hora1="INSERT INTO dispone(matricula,dia,hora) VALUES ($matricula,'LUNES','8:15:00')";
				mysqli_query($mysqli,$hora1);
			}
			if(isset($_POST['2-lunes'])){
				$hora2="INSERT INTO dispone(matricula,dia,hora) VALUES ($matricula,'LUNES','9:15:00')";
				mysqli_query($mysqli,$hora2);
			}
			if(isset($_POST['3-lunes'])){
				$hora3="INSERT INTO dispone(matricula,dia,hora) VALUES ($matricula,'LUNES','10:15:00')";
				mysqli_query($mysqli,$hora3);
			}
			if(isset($_POST['4-lunes'])){
				$hora4="INSERT INTO dispone(matricula,dia,hora) VALUES ($matricula,'LUNES','11:15:00')";
				mysqli_query($mysqli,$hora4);
			}
			if(isset($_POST['5-lunes'])){
				$hora5="INSERT INTO dispone(matricula,dia,hora) VALUES ($matricula,'LUNES','12:15:00')";
				mysqli_query($mysqli,$hora5);
			}
			if(isset($_POST['6-lunes'])){
				$hora6="INSERT INTO dispone(matricula,dia,hora) VALUES ($matricula,'LUNES','13:15:00')";
				mysqli_query($mysqli,$hora6);
			}
			if(isset($_POST['7-lunes'])){
				$hora7="INSERT INTO dispone(matricula,dia,hora) VALUES ($matricula,'LUNES','14:15:00')";
				mysqli_query($mysqli,$hora7);
			}
			if(isset($_POST['8-lunes'])){
				$hora8="INSERT INTO dispone(matricula,dia,hora) VALUES ($matricula,'LUNES','15:15:00')";
				mysqli_query($mysqli,$hora8);
			}
			if(isset($_POST['9-lunes'])){
				$hora9="INSERT INTO dispone(matricula,dia,hora) VALUES ($matricula,'LUNES','16:15:00')";
				mysqli_query($mysqli,$hora9);
			}
			if(isset($_POST['10-lunes'])){
				$hora10="INSERT INTO dispone(matricula,dia,hora) VALUES ($matricula,'LUNES','17:15:00')";
				mysqli_query($mysqli,$hora10);
			}
			if(isset($_POST['11-lunes'])){
				$hora11="INSERT INTO dispone(matricula,dia,hora) VALUES ($matricula,'LUNES','18:15:00')";
				mysqli_query($mysqli,$hora11);
			}
			if(isset($_POST['12-lunes'])){
				$hora12="INSERT INTO dispone(matricula,dia,hora) VALUES ($matricula,'LUNES','19:15:00')";
				mysqli_query($mysqli,$hora12);
			}
			if(isset($_POST['13-lunes'])){
				$hora13="INSERT INTO dispone(matricula,dia,hora) VALUES ($matricula,'LUNES','20:15:00')";
				mysqli_query($mysqli,$hora13);
			}
			if(isset($_POST['1-martes'])){
				$hora14="INSERT INTO dispone(matricula,dia,hora) VALUES ($matricula,'MARTES','8:15:00')";
				mysqli_query($mysqli,$hora14);
			}
			if(isset($_POST['2-martes'])){
				$hora15="INSERT INTO dispone(matricula,dia,hora) VALUES ($matricula,'MARTES','9:15:00')";
				mysqli_query($mysqli,$hora15);
			}
			if(isset($_POST['3-martes'])){
				$hora16="INSERT INTO dispone(matricula,dia,hora) VALUES ($matricula,'MARTES','10:15:00')";
				mysqli_query($mysqli,$hora16);
			}
			if(isset($_POST['4-martes'])){
				$hora17="INSERT INTO dispone(matricula,dia,hora) VALUES ($matricula,'MARTES','11:15:00')";
				mysqli_query($mysqli,$hora17);
			}
			if(isset($_POST['5-martes'])){
				$hora18="INSERT INTO dispone(matricula,dia,hora) VALUES ($matricula,'MARTES','12:15:00')";
				mysqli_query($mysqli,$hora18);
			}
			if(isset($_POST['6-martes'])){
				$hora19="INSERT INTO dispone(matricula,dia,hora) VALUES ($matricula,'MARTES','13:15:00')";
				mysqli_query($mysqli,$hora19);
			}
			if(isset($_POST['7-martes'])){
				$hora20="INSERT INTO dispone(matricula,dia,hora) VALUES ($matricula,'MARTES','14:15:00')";
				mysqli_query($mysqli,$hora20);
			}
			if(isset($_POST['8-martes'])){
				$hora21="INSERT INTO dispone(matricula,dia,hora) VALUES ($matricula,'MARTES','15:15:00')";
				mysqli_query($mysqli,$hora21);
			}
			if(isset($_POST['9-martes'])){
				$hora22="INSERT INTO dispone(matricula,dia,hora) VALUES ($matricula,'MARTES','16:15:00')";
				mysqli_query($mysqli,$hora22);
			}
			if(isset($_POST['10-martes'])){
				$hora23="INSERT INTO dispone(matricula,dia,hora) VALUES ($matricula,'MARTES','17:15:00')";
				mysqli_query($mysqli,$hora23);
			}
			if(isset($_POST['11-martes'])){
				$hora24="INSERT INTO dispone(matricula,dia,hora) VALUES ($matricula,'MARTES','18:15:00')";
				mysqli_query($mysqli,$hora24);
			}
			if(isset($_POST['12-martes'])){
				$hora25="INSERT INTO dispone(matricula,dia,hora) VALUES ($matricula,'MARTES','19:15:00')";
				mysqli_query($mysqli,$hora25);
			}
			if(isset($_POST['13-martes'])){
				$hora26="INSERT INTO dispone(matricula,dia,hora) VALUES ($matricula,'MARTES','20:15:00')";
				mysqli_query($mysqli,$hora26);
			}
			if(isset($_POST['1-miercoles'])){
				$hora27="INSERT INTO dispone(matricula,dia,hora) VALUES ($matricula,'MIERCOLES','8:15:00')";
				mysqli_query($mysqli,$hora27);
			}
			if(isset($_POST['2-miercoles'])){
				$hora28="INSERT INTO dispone(matricula,dia,hora) VALUES ($matricula,'MIERCOLES','9:15:00')";
				mysqli_query($mysqli,$hora28);
			}
			if(isset($_POST['3-miercoles'])){
				$hora29="INSERT INTO dispone(matricula,dia,hora) VALUES ($matricula,'MIERCOLES','10:15:00')";
				mysqli_query($mysqli,$hora29);
			}
			if(isset($_POST['4-miercoles'])){
				$hora30="INSERT INTO dispone(matricula,dia,hora) VALUES ($matricula,'MIERCOLES','11:15:00')";
				mysqli_query($mysqli,$hora30);
			}
			if(isset($_POST['5-miercoles'])){
				$hora31="INSERT INTO dispone(matricula,dia,hora) VALUES ($matricula,'MIERCOLES','12:15:00')";
				mysqli_query($mysqli,$hora31);
			}
			if(isset($_POST['6-miercoles'])){
				$hora32="INSERT INTO dispone(matricula,dia,hora) VALUES ($matricula,'MIERCOLES','13:15:00')";
				mysqli_query($mysqli,$hora32);
			}
			if(isset($_POST['7-miercoles'])){
				$hora33="INSERT INTO dispone(matricula,dia,hora) VALUES ($matricula,'MIERCOLES','14:15:00')";
				mysqli_query($mysqli,$hora33);
			}
			if(isset($_POST['8-miercoles'])){
				$hora34="INSERT INTO dispone(matricula,dia,hora) VALUES ($matricula,'MIERCOLES','15:15:00')";
				mysqli_query($mysqli,$hora34);
			}
			if(isset($_POST['9-miercoles'])){
				$hora35="INSERT INTO dispone(matricula,dia,hora) VALUES ($matricula,'MIERCOLES','16:15:00')";
				mysqli_query($mysqli,$hora35);
			}
			if(isset($_POST['10-miercoles'])){
				$hora36="INSERT INTO dispone(matricula,dia,hora) VALUES ($matricula,'MIERCOLES','17:15:00')";
				mysqli_query($mysqli,$hora36);
			}
			if(isset($_POST['11-miercoles'])){
				$hora37="INSERT INTO dispone(matricula,dia,hora) VALUES ($matricula,'MIERCOLES','18:15:00')";
				mysqli_query($mysqli,$hora37);
			}
			if(isset($_POST['12-miercoles'])){
				$hora38="INSERT INTO dispone(matricula,dia,hora) VALUES ($matricula,'MIERCOLES','19:15:00')";
				mysqli_query($mysqli,$hora38);
			}
			if(isset($_POST['13-miercoles'])){
				$hora39="INSERT INTO dispone(matricula,dia,hora) VALUES ($matricula,'MIERCOLES','20:15:00')";
				mysqli_query($mysqli,$hora39);
			}
			if(isset($_POST['1-jueves'])){
				$hora40="INSERT INTO dispone(matricula,dia,hora) VALUES ($matricula,'JUEVES','8:15:00')";
				mysqli_query($mysqli,$hora40);
			}
			if(isset($_POST['2-jueves'])){
				$hora41="INSERT INTO dispone(matricula,dia,hora) VALUES ($matricula,'JUEVES','9:15:00')";
				mysqli_query($mysqli,$hora41);
			}
			if(isset($_POST['3-jueves'])){
				$hora42="INSERT INTO dispone(matricula,dia,hora) VALUES ($matricula,'JUEVES','10:15:00')";
				mysqli_query($mysqli,$hora42);
			}
			if(isset($_POST['4-jueves'])){
				$hora43="INSERT INTO dispone(matricula,dia,hora) VALUES ($matricula,'JUEVES','11:15:00')";
				mysqli_query($mysqli,$hora43);
			}
			if(isset($_POST['5-jueves'])){
				$hora44="INSERT INTO dispone(matricula,dia,hora) VALUES ($matricula,'JUEVES','12:15:00')";
				mysqli_query($mysqli,$hora44);
			}
			if(isset($_POST['6-jueves'])){
				$hora45="INSERT INTO dispone(matricula,dia,hora) VALUES ($matricula,'JUEVES','13:15:00')";
				mysqli_query($mysqli,$hora45);
			}
			if(isset($_POST['7-jueves'])){
				$hora46="INSERT INTO dispone(matricula,dia,hora) VALUES ($matricula,'JUEVES','14:15:00')";
				mysqli_query($mysqli,$hora46);
			}
			if(isset($_POST['8-jueves'])){
				$hora47="INSERT INTO dispone(matricula,dia,hora) VALUES ($matricula,'JUEVES','15:15:00')";
				mysqli_query($mysqli,$hora47);
			}
			if(isset($_POST['9-jueves'])){
				$hora48="INSERT INTO dispone(matricula,dia,hora) VALUES ($matricula,'JUEVES','16:15:00')";
				mysqli_query($mysqli,$hora48);
			}
			if(isset($_POST['10-jueves'])){
				$hora49="INSERT INTO dispone(matricula,dia,hora) VALUES ($matricula,'JUEVES','17:15:00')";
				mysqli_query($mysqli,$hora49);
			}
			if(isset($_POST['11-jueves'])){
				$hora50="INSERT INTO dispone(matricula,dia,hora) VALUES ($matricula,'JUEVES','18:15:00')";
				mysqli_query($mysqli,$hora50);
			}
			if(isset($_POST['12-jueves'])){
				$hora51="INSERT INTO dispone(matricula,dia,hora) VALUES ($matricula,'JUEVES','19:15:00')";
				mysqli_query($mysqli,$hora51);
			}
			if(isset($_POST['13-jueves'])){
				$hora52="INSERT INTO dispone(matricula,dia,hora) VALUES ($matricula,'JUEVES','20:15:00')";
				mysqli_query($mysqli,$hora52);
			}
			if(isset($_POST['1-viernes'])){
				$hora53="INSERT INTO dispone(matricula,dia,hora) VALUES ($matricula,'VIERNES','8:15:00')";
				mysqli_query($mysqli,$hora53);
			}
			if(isset($_POST['2-viernes'])){
				$hora54="INSERT INTO dispone(matricula,dia,hora) VALUES ($matricula,'VIERNES','9:15:00')";
				mysqli_query($mysqli,$hora54);
			}
			if(isset($_POST['3-viernes'])){
				$hora55="INSERT INTO dispone(matricula,dia,hora) VALUES ($matricula,'VIERNES','10:15:00')";
				mysqli_query($mysqli,$hora55);
			}
			if(isset($_POST['4-viernes'])){
				$hora56="INSERT INTO dispone(matricula,dia,hora) VALUES ($matricula,'VIERNES','11:15:00')";
				mysqli_query($mysqli,$hora56);
			}
			if(isset($_POST['5-viernes'])){
				$hora57="INSERT INTO dispone(matricula,dia,hora) VALUES ($matricula,'VIERNES','12:15:00')";
				mysqli_query($mysqli,$hora57);
			}
			if(isset($_POST['6-viernes'])){
				$hora58="INSERT INTO dispone(matricula,dia,hora) VALUES ($matricula,'VIERNES','13:15:00')";
				mysqli_query($mysqli,$hora58);
			}
			if(isset($_POST['7-viernes'])){
				$hora59="INSERT INTO dispone(matricula,dia,hora) VALUES ($matricula,'VIERNES','14:15:00')";
				mysqli_query($mysqli,$hora59);
			}
			if(isset($_POST['8-viernes'])){
				$hora60="INSERT INTO dispone(matricula,dia,hora) VALUES ($matricula,'VIERNES','15:15:00')";
				mysqli_query($mysqli,$hora60);
			}
			if(isset($_POST['9-viernes'])){
				$hora61="INSERT INTO dispone(matricula,dia,hora) VALUES ($matricula,'VIERNES','16:15:00')";
				mysqli_query($mysqli,$hora61);
			}
			if(isset($_POST['10-viernes'])){
				$hora62="INSERT INTO dispone(matricula,dia,hora) VALUES ($matricula,'VIERNES','17:15:00')";
				mysqli_query($mysqli,$hora62);
			}
			if(isset($_POST['11-viernes'])){
				$hora63="INSERT INTO dispone(matricula,dia,hora) VALUES ($matricula,'VIERNES','18:15:00')";
				mysqli_query($mysqli,$hora63);
			}
			if(isset($_POST['12-viernes'])){
				$hora64="INSERT INTO dispone(matricula,dia,hora) VALUES ($matricula,'VIERNES','19:15:00')";
				mysqli_query($mysqli,$hora64);
			}
			if(isset($_POST['13-viernes'])){
				$hora65="INSERT INTO dispone(matricula,dia,hora) VALUES ($matricula,'VIERNES','20:15:00')";
				mysqli_query($mysqli,$hora65);
			}
			echo "postulación exitosa.";
		}
		else{
			echo "error en la postulación (ramo 1)";
		}}
	else{
		echo "no se encuentra registro de este postulante.";
	}}
?>
