<?php
session_start();

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true) {
echo "Acceso denegado. Inicie sesión como administrador para ver esta página";
die();
}


<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Sistema de Postulación a ayudantías: Sección Administrador</title>
  <link type="text/css" rel="stylesheet" href="css/bootstrap.css"  media="screen,projection"/>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/css/bootstrap-select.min.css">

  <!-- Latest compiled and minified JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/js/bootstrap-select.min.js"></script>

  <!-- (Optional) Latest compiled and minified JavaScript translation files -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/js/i18n/defaults-*.min.js"></script>

        <?php include("cabecera.php");?>
</head>

<nav class="navbar navbar-default"> <!-- Todo lo que esté dentro de nav sera la barra de navegacion -->
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="administrador.php">Sección Administrador </a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav"> <!-- esto es una lista desordenada -->

        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Registrar <span class="caret"></span></a>
          <ul class="dropdown-menu"> <!-- es una lista tipo drop dawn, la clase="dropdown-menu" es un estilo que tiene bootstrap el cual añadimos en el head -->
            <li><a href="elegir_ayudantes.php">Elegir alumnos ayudantes</a></li>
            <li><a href="pasar_semestre.php">Limpiar base para pasar a semestre siguiente</a></li>
            <li role="separator" class="divider"></li> <!-- separa visualmente la lista  -->
            <li><a href="add_nuevos.php">Añadir nuevos docentes o asignaturas.</a></li>


          </ul>

        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Consultar <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="postulantes_del_semestre.php">Postulantes del semestre actual</a></li>


          </ul>

        </li>
      </ul>


    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
  <?php
  include("connect_db.php");
  $sql_ramos="SELECT codigo FROM ramo";
  $sql_profes="SELECT rut,nombre FROM profesor";
  $ramos = $mysqli->query($sql_ramos);
  $profes = mysqli_query($mysqli,$sql_profes);

  ?>

  <!-- tabla-->
  <body>
    <div class="container">
    	<form action='vaciar-tablas.php' method=post>
        <div class="form-group">
        <big>Se vaciarán las tablas postula y dispone.</big>
                  <label>Indicar código de semestre</label>
                  <p>Código Semestre: <input type=text name=semestre /></p></div>
        <button align="right" type=" button" class="btn">vaciar tablas</button></form>
      </div>
      <div class="container">
      <h2>    <p>Actualizar información de un Ramo</p></h2>

      <form action="actualizar_ramo.php", method=post>
        <div class="form-group">
          <label>Indicar código de semestre</label>
          <p>Código Semestre: <input type=text name=semestre /></p></div>
        <div class="form-group">
          <label for="sel1">Seleccione el código de un ramo</label>
          <select class="form-control" id="sel1" name="ramo">
            <?php while ($row = mysqli_fetch_array($ramos)) { ?>
              <tr>
                <option value="<?php echo $row[0];?>"> <?php echo $row[0]; ?></option>
              </tr>
            <?php } ?>
          </select>
        </div>
        <div class="form-group">

          <label for="sel2">Añadir profesores del ramo</label>
          <p> Presionar Ctrl para seleccionar más de un profesor.</p>
          <select class="form-control" multiple="multiple" name="profes[]">
            <?php while($row1 = mysqli_fetch_array($profes)){?>

            <option value="<?php echo $row1[0];?>"><?php echo $row1[1];?></option>

          <?php }?>
            </select>
        </div>
        <div class="form-group">
          <label>Seleccione el horario del ramo</label>
        <center><p><table>
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
        	<input type="checkbox" name="5-miercoles" value="5-miercoles" disabled></td><td align="center"><input type="checkbox" name="5-jueves" value="5-jueves"></td><td align="center">
        	<input type="checkbox" name="5-viernes" value="5-viernes"></td></tr><tr>
        	<td>13:15</td><td align="center"> <input type="checkbox" name="6-lunes" value="6-lunes"></td><td align="center"><input type="checkbox" name="6-martes" value="6-martes"></td><td align="center">
        	<input type="checkbox" name="6-miercoles" value="6-miercoles" disabled></td><td align="center"><input type="checkbox" name="6-jueves" value="6-jueves"></td><td align="center">
        	<input type="checkbox" name="6-viernes" value="6-viernes"></td></tr><tr>
        	<td>14:15</td><td align="center"> <input type="checkbox" name="7-lunes" value="7-lunes"></td><td align="center"><input type="checkbox" name="7-martes" value="7-martes"></td><td align="center">
        	<input type="checkbox" name="7-miercoles" value="7-miercoles" disabled></td><td align="center"><input type="checkbox" name="7-jueves" value="7-jueves"></td><td align="center">
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
        	<input type="checkbox" name="13-viernes" value="13-viernes"></td></tr></table></p></div>
        <input type="submit" value="submit"> </center>
      </form>



  </body>
  <?php include("pie-de-pag.php");?>
  </html>
