<!DOCTYPE html>
<html>
<head>
      <meta charset="UTF-8">
      <style>
      ul {
      list-style-type: none;
      margin: 0;
      padding: 0;
      overflow: hidden;
      background-color: #333;
      }

      li {
      float: left;
      }

      li a {
      display: block;
      color: white;
      text-align: center;
      padding: 14px 16px;
      text-decoration: none;
      }

      li a:hover:not(.active) {
      background-color: #111;
      }

      .active {
      background-color: #000080;
      }
      </style>

      <link type="text/css" rel="stylesheet" href="css/bootstrap.css"  media="screen,projection"/>   <!-- Aca añado mis documentos que contienen los estilos, que utilizare en nuestra pagina, <link> nos indica que utilizaremos el documento indicado en href="documento", en este caso es el framework bootstrap del que les hable y el que les recomiendo usar. Bootstrap tiene estilos css y funciones javascript que debemos importar (referirnos a ella con link), en este caso estamos añadiendo la parte de estilos(css) y en la siguiente linea añadiremos la parte javascript (es un lenguaje de programacion orientado a desarrollo web, nos ayuda a crear páginas dinámicas, cualquier duda me dicen)  -->

      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> <!-- Importe ajax, no se preocupen por esto pero les puede ser utíl para quien quiera aprender más -->
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script><!-- Parte Js de bootstrap -->
      <?php include("cabecera.php");?>
</head>
<body>  <ul>
  <li><a href="postulante0.php">Postulante Nuevo</a></li>
  <li><a class="active" href="#">Postulante Ya Registrado</a></li>
</ul>
<h1>Formulario de Postulación</h1>
      <div><center><br/>
	<form action='submit-postulante_viejo.php' method=post>
	<h2>Datos postulante </h2>
  <table><tr>
	<td align="left">Nombre completo:</td><td align="right"> <input type=text name=nombre ALIGN="right"/></td></tr><tr>
	<td align="left">Matrícula:</td><td align="right"> <input type=text name=matricula /> </td></tr><tr>
  <td align="left">Correo institucional (sin @udec.cl): </td><td align="right"><input type=text name=mail /></td></tr></table>
  <h2> Promedio últimos ramos cursados en CFM </h2>
  <p>Código Ramo: <input type=text name=ramo_cursado1 /> Calificación: <input type=text name=nota1 /><br></p>
  <p>Código Ramo: <input type=text name=ramo_cursado2 /> Calificación: <input type=text name=nota2 /><br></p>
  <p>Código Ramo: <input type=text name=ramo_cursado3 /> Calificación: <input type=text name=nota3 /><br></p>
	<h2> Ramos a los que postula </h2>
	<p>Debe postular al menos a un ramo </p>
	<p>Código Ramo: <input type=text name=ramo1 /> solicitado <input type="checkbox" name="solicitado1" value="solicitado1"><br></p>
	<p>Código Ramo: <input type=text name=ramo2 /> solicitado <input type="checkbox" name="solicitado2" value="solicitado2"><br></p>
	<p>Código Ramo: <input type=text name=ramo3 /> solicitado <input type="checkbox" name="solicitado3" value="solicitado3"><br></p>
	<h2> Horario disponible </h2>
	<p> Chequear los horarios que tiene disponible. Debe marcar al menos una casilla. </p>
  <p><table>
    <tr>
  	 <th>HORA&nbsp</th><th>LUNES&nbsp </th><th>MARTES&nbsp</th><th> MIÉRCOLES&nbsp</th><th> JUEVES&nbsp </th><th>VIERNES </th></tr><tr>
  	<td>8:15</td><td align="center"> <input type="checkbox" name="1-lunes" value="1-lunes"></td><td align="center"><input type="checkbox" name="1-martes" value="1-martes"></td><td align="center">
  	<input type="checkbox" name="1-miercoles" value="1-miercoles"></td><td align="center"><input type="checkbox" name="1-jueves" value="1-jueves"></td><td align="center">
  	<input type="checkbox" name="1-viernes" value="1-viernes"></td></tr><tr>
  	<td>9:15 </td><td align="center"><input type="checkbox" name="2-lunes" value="2-lunes"></td><td align="center"><input type="checkbox" name="2-martes" value="2-martes"></td><td align="center">
  	<input type="checkbox" name="2-miercoles" value="2-miercoles"></td><td align="center"><input type="checkbox" name="2-jueves" value="2-jueves"></td><td align="center">
  	<input type="checkbox" name="2-viernes" value="2-viernes"></td></tr><tr>
  	<td>10:15 </td><td align="center"><input type="checkbox" name="3-lunes" value="3-lunes"></td><td align="center"><input type="checkbox" name="3-martes" value="3-martes"></td><td align="center">
  	<input type="checkbox" name="3-miercoles" value="3-miercoles"></td><td align="center"><input type="checkbox" name="3-jueves" value="3-jueves"></td><td align="center">
  	<input type="checkbox" name="3-viernes" value="3-viernes"></td></tr><tr>
  	<td>11:15</td><td align="center"> <input type="checkbox" name="4-lunes" value="4-lunes"></td><td align="center"><input type="checkbox" name="4-martes" value="4-martes"></td><td align="center">
  	<input type="checkbox" name="4-miercoles" value="4-miercoles"></td><td align="center"><input type="checkbox" name="4-jueves" value="4-jueves"></td><td align="center">
  	<input type="checkbox" name="4-viernes" value="4-viernes"></td></tr><tr>
  	<td>12:15</td><td align="center"> <input type="checkbox" name="5-lunes" value="5-lunes"></td><td align="center"><input type="checkbox" name="5-martes" value="5-martes"></td><td align="center">
  	<input type="checkbox" name="5-miercoles" value="5-miercoles"></td><td align="center"><input type="checkbox" name="5-jueves" value="5-jueves"></td><td align="center">
  	<input type="checkbox" name="5-viernes" value="5-viernes"></td></tr><tr>
  	<td>13:15</td><td align="center"> <input type="checkbox" name="6-lunes" value="6-lunes"></td><td align="center"><input type="checkbox" name="6-martes" value="6-martes"></td><td align="center">
  	<input type="checkbox" name="6-miercoles" value="6-miercoles"></td><td align="center"><input type="checkbox" name="6-jueves" value="6-jueves"></td><td align="center">
  	<input type="checkbox" name="6-viernes" value="6-viernes"></td></tr><tr>
  	<td>14:15</td><td align="center"> <input type="checkbox" name="7-lunes" value="7-lunes"></td><td align="center"><input type="checkbox" name="7-martes" value="7-martes"></td><td align="center">
  	<input type="checkbox" name="7-miercoles" value="7-miercoles"></td><td align="center"><input type="checkbox" name="7-jueves" value="7-jueves"></td><td align="center">
  	<input type="checkbox" name="7-viernes" value="7-viernes"></td></tr><tr>
  	<td>15:15</td><td align="center"> <input type="checkbox" name="8-lunes" value="8-lunes"></td><td align="center"><input type="checkbox" name="8-martes" value="8-martes"></td><td align="center">
  	<input type="checkbox" name="8-miercoles" value="8-miercoles"></td><td align="center"><input type="checkbox" name="8-jueves" value="8-jueves"></td><td align="center">
  	<input type="checkbox" name="8-viernes" value="8-viernes"></td></tr><tr>
  	<td>16:15</td><td align="center"> <input type="checkbox" name="9-lunes" value="9-lunes"></td><td align="center"><input type="checkbox" name="9-martes" value="9-martes"></td><td align="center">
  	<input type="checkbox" name="9-miercoles" value="9-miercoles"></td><td align="center"><input type="checkbox" name="9-jueves" value="9-jueves"></td><td align="center">
  	<input type="checkbox" name="9-viernes" value="9-viernes"></td></tr><tr>
  	<td>17:15</td><td align="center"> <input type="checkbox" name="10-lunes" value="10-lunes"></td><td align="center"><input type="checkbox" name="10-martes" value="10-martes"></td><td align="center">
  	<input type="checkbox" name="10-miercoles" value="10-miercoles"></td><td align="center"><input type="checkbox" name="10-jueves" value="10-jueves"></td><td align="center">
  	<input type="checkbox" name="10-viernes" value="10-viernes"></td></tr><tr>
  	<td>18:15</td><td align="center"> <input type="checkbox" name="11-lunes" value="11-lunes"></td><td align="center"><input type="checkbox" name="11-martes" value="11-martes"></td><td align="center">
  	<input type="checkbox" name="11-miercoles" value="11-miercoles"></td><td align="center"><input type="checkbox" name="11-jueves" value="11-jueves"></td><td align="center">
  	<input type="checkbox" name="11-viernes" value="11-viernes"></td></tr><tr>
  	<td>19:15 </td><td align="center"><input type="checkbox" name="12-lunes" value="12-lunes"></td><td align="center"><input type="checkbox" name="12-martes" value="12-martes"></td><td align="center">
  	<input type="checkbox" name="12-miercoles" value="12-miercoles"></td><td align="center"><input type="checkbox" name="12-jueves" value="12-jueves"></td><td align="center">
  	<input type="checkbox" name="12-viernes" value="12-viernes"></td></tr><tr>
  	<td>20:15</td><td align="center"> <input type="checkbox" name="13-lunes" value="13-lunes"></td><td align="center"><input type="checkbox" name="13-martes" value="13-martes"></td><td align="center">
  	<input type="checkbox" name="13-miercoles" value="13-miercoles"></td><td align="center"><input type="checkbox" name="13-jueves" value="13-jueves"></td><td align="center">
  	<input type="checkbox" name="13-viernes" value="13-viernes"></td></tr></table></p>
		<p>	<input type="submit" value="ya registrado"></p></form>	  </center></div>
</body>
</html>
