<?php
session_start();
session_destroy();
?>

﻿<!DOCTYPE html>
<html>
<head>
      <meta charset="UTF-8">
      <style>
      nav navbar navbar-default{
          list-style-type: none;
          margin: 0;
          padding: 0;
          overflow: hidden;
          background-color: #333;
      }
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
      body{
        background.color: #33ccff;
      }
      </style>

      <link type="text/css" rel="stylesheet" href="css/bootstrap.css"  media="screen,projection"/>   <!-- Aca añado mis documentos que contienen los estilos, que utilizare en nuestra pagina, <link> nos indica que utilizaremos el documento indicado en href="documento", en este caso es el framework bootstrap del que les hable y el que les recomiendo usar. Bootstrap tiene estilos css y funciones javascript que debemos importar (referirnos a ella con link), en este caso estamos añadiendo la parte de estilos(css) y en la siguiente linea añadiremos la parte javascript (es un lenguaje de programacion orientado a desarrollo web, nos ayuda a crear páginas dinámicas, cualquier duda me dicen)  -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> <!-- Importe ajax, no se preocupen por esto pero les puede ser utíl para quien quiera aprender más -->
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script><!-- Parte Js de bootstrap -->

      <?php include("cabecera.php");?>
</head>
<body>
  <nav class="navbar navbar-default"> <!-- Todo lo que estè dentro de nav sera la barra de navegacion -->
    <div class="container-fluid">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
        </button>
        <a class="navbar-brand" href="#">Sección Postulates </a> <!-- las etiquetas a nos indica que el texto dentro de la etiqueta será un link a otra página (docimento), el elemento será clickeable y al hacerlo redirigirá a la página indicada dentro de las comillas en el atributo href, en este caso al hacer click en café, nos redirige a "index.html" que en este caso es la misma pagina, pero podría llamar a otra pagina ej: href="pagina2.html", en este caso no la he creado así que les dirá que la página no se encuentra, para crearla deben crearla en el mismo directorio donde está su página, si la añaden en una carpeta deben incluir el nombre de la carpeta (href="carpeta/pagina2.html") -->
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul> <!-- esto es una lista desordenada -->

          <li><a class="active" href="postulante0.php">Postulante Nuevo<span class="sr-only">(current)</span></a></li>
          <li><a href="postulante1.php">Postulante Ya Registrado<span class="sr-only">(current)</span></a></li>
            </ul>
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
  </nav>

  <div>

	<form action='submit-postulante_nuevo.php' method=post>
  <center>    <h1>Formulario de Postulación</h1>
	<h2>Datos postulante </h2>
  <table><tr>
	<td align="left">Nombre completo:</td><td align="right"> <input type=text name=nombre ALIGN="right"/></td></tr><tr>
	<td align="left">Matrícula:</td><td align="right"> <input type=text name=matricula /> </td></tr><tr>
  <td align="left">Correo institucional (sin @udec.cl): </td><td align="right"><input type=text name=mail /></td></tr></table>
  <h2> Promedio últimos ramos cursados en CFM </h2>
  Debe haber cursado al menos un ramo en la Facultad de Ciencias Físicas y Matemáticas.
  <p>Código Ramo: <input type=text name=ramo_cursado1 /> Calificación: <input type=text name=nota1 /><br></p>
  <p>Código Ramo: <input type=text name=ramo_cursado2 /> Calificación: <input type=text name=nota2 /><br></p>
  <p>Código Ramo: <input type=text name=ramo_cursado3 /> Calificación: <input type=text name=nota3 /><br></p>
  <h2> Ramos a los que postula </h2>
  <p>Debe postular al menos a un ramo.</p>
  <p> El código del ramo debe contener un guión indicando la sección. Por ejemplo: 510145-1.</p><p> Si hay sólo una sección reemplazar por un cero. Por ejemplo: 520129-0.</p>
  <p>Código Ramo: <input type=text name=ramo1 /> solicitado <label><input type="checkbox" name="solicitado1" value="solicitado1"></label><br></p>
  <p>Código Ramo: <input type=text name=ramo2 /> solicitado <label><input type="checkbox" name="solicitado2" value="solicitado2"></label><br></p>
  <p>Código Ramo: <input type=text name=ramo3 /> solicitado <label><input type="checkbox" name="solicitado3" value="solicitado3"></label><br></p>

  <h2> Horario disponible </h2>
	<p> Chequear los horarios que tiene disponible. Debe marcar al menos una casilla. </p>
<p><table>
  <tr>
	 <th>HORA&nbsp</th><th>LUNES&nbsp </th><th>MARTES&nbsp</th><th> MIÉRCOLES&nbsp</th><th> JUEVES&nbsp </th><th>VIERNES </th></tr><tr>
	<td>8:15</td><td align="center"> <label><input type="checkbox" name="1-lunes" value="1-lunes"></label></td><td align="center"><label><input type="checkbox" name="1-martes" value="1-martes"></label></td><td align="center">
	<label><input type="checkbox" name="1-miercoles" value="1-miercoles"></label></td><td align="center"><label><input type="checkbox" name="1-jueves" value="1-jueves"></label></td><td align="center">
	<label><input type="checkbox" name="1-viernes" value="1-viernes"></label></td></tr><tr>
	<td>9:15 </td><td align="center"><label><input type="checkbox" name="2-lunes" value="2-lunes"></label></td><td align="center"><label><input type="checkbox" name="2-martes" value="2-martes"></label></td><td align="center">
	<label><input type="checkbox" name="2-miercoles" value="2-miercoles"></label></td><td align="center"><label><input type="checkbox" name="2-jueves" value="2-jueves"></label></td><td align="center">
	<label><input type="checkbox" name="2-viernes" value="2-viernes"></label></td></tr><tr>
	<td>10:15 </td><td align="center"><label><input type="checkbox" name="3-lunes" value="3-lunes"></label></td><td align="center"><label><input type="checkbox" name="3-martes" value="3-martes"></label></td><td align="center">
	<label><input type="checkbox" name="3-miercoles" value="3-miercoles"></label></td><td align="center"><label><input type="checkbox" name="3-jueves" value="3-jueves"></label></td><td align="center">
	<label><input type="checkbox" name="3-viernes" value="3-viernes"></label></td></tr><tr>
	<td>11:15</td><td align="center"> <label><input type="checkbox" name="4-lunes" value="4-lunes"></label></td><td align="center"><label><input type="checkbox" name="4-martes" value="4-martes"></label></td><td align="center">
	<label><input type="checkbox" name="4-miercoles" value="4-miercoles"></label></td><td align="center"><label><input type="checkbox" name="4-jueves" value="4-jueves"></label></td><td align="center">
	<label><input type="checkbox" name="4-viernes" value="4-viernes"></label></td></tr><tr>
	<td>12:15</td><td align="center"> <label><input type="checkbox" name="5-lunes" value="5-lunes"></label></td><td align="center"><label><input type="checkbox" name="5-martes" value="5-martes"></label></td><td align="center">
	<label><input type="checkbox" name="5-miercoles" value="5-miercoles" disabled></label></td><td align="center"><label><input type="checkbox" name="5-jueves" value="5-jueves"></label></td><td align="center">
	<label><input type="checkbox" name="5-viernes" value="5-viernes"></label></td></tr><tr>
	<td>13:15</td><td align="center"> <label><input type="checkbox" name="6-lunes" value="6-lunes"></label></td><td align="center"><label><input type="checkbox" name="6-martes" value="6-martes"></label></td><td align="center">
	<label><input type="checkbox" name="6-miercoles" value="6-miercoles" disabled></label></td><td align="center"><label><input type="checkbox" name="6-jueves" value="6-jueves"></label></td><td align="center">
	<label><input type="checkbox" name="6-viernes" value="6-viernes"></label></td></tr><tr>
	<td>14:15</td><td align="center"> <label><input type="checkbox" name="7-lunes" value="7-lunes"></label></td><td align="center"><label><input type="checkbox" name="7-martes" value="7-martes"></label></td><td align="center">
	<label><input type="checkbox" name="7-miercoles" value="7-miercoles"disabled></label></td><td align="center"><label><input type="checkbox" name="7-jueves" value="7-jueves"></label></td><td align="center">
	<label><input type="checkbox" name="7-viernes" value="7-viernes"></label></td></tr><tr>
	<td>15:15</td><td align="center"> <label><input type="checkbox" name="8-lunes" value="8-lunes"></label></td><td align="center"><label><input type="checkbox" name="8-martes" value="8-martes"></label></td><td align="center">
	<label><input type="checkbox" name="8-miercoles" value="8-miercoles"></label></td><td align="center"><label><input type="checkbox" name="8-jueves" value="8-jueves"></label></td><td align="center">
	<label><input type="checkbox" name="8-viernes" value="8-viernes"></label></td></tr><tr>
	<td>16:15</td><td align="center"> <label><input type="checkbox" name="9-lunes" value="9-lunes"></label></td><td align="center"><label><input type="checkbox" name="9-martes" value="9-martes"></label></td><td align="center">
	<label><input type="checkbox" name="9-miercoles" value="9-miercoles"></label></td><td align="center"><label><input type="checkbox" name="9-jueves" value="9-jueves"></label></td><td align="center">
	<label><input type="checkbox" name="9-viernes" value="9-viernes"></label></td></tr><tr>
	<td>17:15</td><td align="center"> <label><input type="checkbox" name="10-lunes" value="10-lunes"></label></td><td align="center"><label><input type="checkbox" name="10-martes" value="10-martes"></label></td><td align="center">
	<label><input type="checkbox" name="10-miercoles" value="10-miercoles"></label></td><td align="center"><label><input type="checkbox" name="10-jueves" value="10-jueves"></label></td><td align="center">
	<label><input type="checkbox" name="10-viernes" value="10-viernes"></label></td></tr><tr>
	<td>18:15</td><td align="center"> <label><input type="checkbox" name="11-lunes" value="11-lunes"></label></td><td align="center"><label><input type="checkbox" name="11-martes" value="11-martes"></label></td><td align="center">
	<label><input type="checkbox" name="11-miercoles" value="11-miercoles"></label></td><td align="center"><label><input type="checkbox" name="11-jueves" value="11-jueves"></label></td><td align="center">
	<label><input type="checkbox" name="11-viernes" value="11-viernes"></label></td></tr><tr>
	<td>19:15 </td><td align="center"><label><input type="checkbox" name="12-lunes" value="12-lunes"></label></td><td align="center"><label><input type="checkbox" name="12-martes" value="12-martes"></label></td><td align="center">
	<label><input type="checkbox" name="12-miercoles" value="12-miercoles"></label></td><td align="center"><label><input type="checkbox" name="12-jueves" value="12-jueves"></label></td><td align="center">
	<label><input type="checkbox" name="12-viernes" value="12-viernes"></label></td></tr><tr>
	<td>20:15</td><td align="center"> <label><input type="checkbox" name="13-lunes" value="13-lunes"></label></td><td align="center"><label><input type="checkbox" name="13-martes" value="13-martes"></label></td><td align="center">
	<label><input type="checkbox" name="13-miercoles" value="13-miercoles"></label></td><td align="center"><label><input type="checkbox" name="13-jueves" value="13-jueves"></label></td><td align="center">
	<label><input type="checkbox" name="13-viernes" value="13-viernes"></label></td></tr></table></p>
		<p><input type="submit" value="postulante nuevo"></p></form>	  </center></div>

    <?php include("pie-de-pag.php");?>
  </body>
</html>
