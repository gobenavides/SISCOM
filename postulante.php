<!DOCTYPE html>
<html>
<head>
      <title>Formulario de Postulación</title>
</head>
<body>
      <center><br/>
	<form action='submit-postulante.php' method=post>
	<h2> Datos postulante </h2>
	<p>Nombre completo: <input type=text name=nombre /> </p>
	<p>Matrícula: <input type=text name=matricula /> </p>
  <h2> Promedio últimos ramos cursados en CFM </h2>
  <p>Codigo Ramo: <input type=text name=ramo_cursado1 /> calificación: <input type=text name=nota1 /><br></p>
  <p>Codigo Ramo: <input type=text name=ramo_cursado2 /> calificación: <input type=text name=nota2 /><br></p>
  <p>Codigo Ramo: <input type=text name=ramo_cursado3 /> calificación: <input type=text name=nota3 /><br></p>
	<h2> Ramos a los que postula. </h2>
	<p>Debe postular al menos a un ramo. </p>
	<p>Codigo Ramo: <input type=text name=ramo1 /> solicitado <input type="checkbox" name="solicitado1" value="solicitado1"><br></p>
	<p>Codigo Ramo: <input type=text name=ramo2 /> solicitado <input type="checkbox" name="solicitado2" value="solicitado2"><br></p>
	<p>Codigo Ramo: <input type=text name=ramo3 /> solicitado <input type="checkbox" name="solicitado3" value="solicitado3"> <br></p>
	<h2> Horario disponible </h2>
	<p> chequear los horarios que tiene disponible. Debe chequear al menos una casilla. </p>
<p><table>
  <tr>
	 <th>HORA</th><th>LUNES </th><th>MARTES</th><th> MIÉRCOLES</th><th> JUEVES </th><th>VIERNES </th></tr><tr>
	<th>8:15</th><th> <input type="checkbox" name="1-lunes" value="1-lunes"></th><th><input type="checkbox" name="1-martes" value="1-martes"></th><th>
	<input type="checkbox" name="1-miercoles" value="1-miercoles"></th><th><input type="checkbox" name="1-jueves" value="1-jueves"></th><th>
	<input type="checkbox" name="1-viernes" value="1-viernes"></th></tr><tr>
	<th>9:15 </th><th><input type="checkbox" name="2-lunes" value="2-lunes"></th><th><input type="checkbox" name="2-martes" value="2-martes"></th><th>
	<input type="checkbox" name="2-miercoles" value="2-miercoles"></th><th><input type="checkbox" name="2-jueves" value="2-jueves"></th><th>
	<input type="checkbox" name="2-viernes" value="2-viernes"></th></tr><tr>
	<th>10:15 </th><th><input type="checkbox" name="3-lunes" value="3-lunes"></th><th><input type="checkbox" name="3-martes" value="3-martes"></th><th>
	<input type="checkbox" name="3-miercoles" value="3-miercoles"></th><th><input type="checkbox" name="3-jueves" value="3-jueves"></th><th>
	<input type="checkbox" name="3-viernes" value="3-viernes"></th></tr><tr>
	<th>11:15</th><th> <input type="checkbox" name="4-lunes" value="4-lunes"></th><th><input type="checkbox" name="4-martes" value="4-martes"></th><th>
	<input type="checkbox" name="4-miercoles" value="4-miercoles"></th><th><input type="checkbox" name="4-jueves" value="4-jueves"></th><th>
	<input type="checkbox" name="4-viernes" value="4-viernes"></th></tr><tr>
	<th>12:15</th><th> <input type="checkbox" name="5-lunes" value="5-lunes"></th><th><input type="checkbox" name="5-martes" value="5-martes"></th><th>
	<input type="checkbox" name="5-miercoles" value="5-miercoles"></th><th><input type="checkbox" name="5-jueves" value="5-jueves"></th><th>
	<input type="checkbox" name="5-viernes" value="5-viernes"></th></tr><tr>
	<th>13:15</th><th> <input type="checkbox" name="6-lunes" value="6-lunes"></th><th><input type="checkbox" name="6-martes" value="6-martes"></th><th>
	<input type="checkbox" name="6-miercoles" value="6-miercoles"></th><th><input type="checkbox" name="6-jueves" value="6-jueves"></th><th>
	<input type="checkbox" name="6-viernes" value="6-viernes"></th></tr><tr>
	<th>14:15</th><th> <input type="checkbox" name="7-lunes" value="7-lunes"></th><th><input type="checkbox" name="7-martes" value="7-martes"></th><th>
	<input type="checkbox" name="7-miercoles" value="7-miercoles"></th><th><input type="checkbox" name="7-jueves" value="7-jueves"></th><th>
	<input type="checkbox" name="7-viernes" value="7-viernes"></th></tr><tr>
	<th>15:15</th><th> <input type="checkbox" name="8-lunes" value="8-lunes"></th><th><input type="checkbox" name="8-martes" value="8-martes"></th><th>
	<input type="checkbox" name="8-miercoles" value="8-miercoles"></th><th><input type="checkbox" name="8-jueves" value="8-jueves"></th><th>
	<input type="checkbox" name="8-viernes" value="8-viernes"></th></tr><tr>
	<th>16:15</th><th> <input type="checkbox" name="9-lunes" value="9-lunes"></th><th><input type="checkbox" name="9-martes" value="9-martes"></th><th>
	<input type="checkbox" name="9-miercoles" value="9-miercoles"></th><th><input type="checkbox" name="9-jueves" value="9-jueves"></th><th>
	<input type="checkbox" name="9-viernes" value="9-viernes"></th></tr><tr>
	<th>17:15</th><th> <input type="checkbox" name="10-lunes" value="10-lunes"></th><th><input type="checkbox" name="10-martes" value="10-martes"></th><th>
	<input type="checkbox" name="10-miercoles" value="10-miercoles"></th><th><input type="checkbox" name="10-jueves" value="10-jueves"></th><th>
	<input type="checkbox" name="10-viernes" value="10-viernes"></th></tr><tr>
	<th>18:15</th><th> <input type="checkbox" name="11-lunes" value="11-lunes"></th><th><input type="checkbox" name="11-martes" value="11-martes"></th><th>
	<input type="checkbox" name="11-miercoles" value="11-miercoles"></th><th><input type="checkbox" name="11-jueves" value="11-jueves"></th><th>
	<input type="checkbox" name="11-viernes" value="11-viernes"></th></tr><tr>
	<th>19:15 </th><th><input type="checkbox" name="12-lunes" value="12-lunes"></th><th><input type="checkbox" name="12-martes" value="12-martes"></th><th>
	<input type="checkbox" name="12-miercoles" value="12-miercoles"></th><th><input type="checkbox" name="12-jueves" value="12-jueves"></th><th>
	<input type="checkbox" name="12-viernes" value="12-viernes"></th></tr><tr>
	<th>20:15</th><th> <input type="checkbox" name="13-lunes" value="13-lunes"></th><th><input type="checkbox" name="13-martes" value="13-martes"></th><th>
	<input type="checkbox" name="13-miercoles" value="13-miercoles"></th><th><input type="checkbox" name="13-jueves" value="13-jueves"></th><th>
	<input type="checkbox" name="13-viernes" value="13-viernes"></th></tr></p>
		<p><input type="submit" name="nuevo" value="postulante nuevo">
			<input type="submit" name="viejo" value="ya registrado"></p></form>	  </center>
</body>
</html>
