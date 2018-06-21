<!DOCTYPE html>
<html lang="es">
<head>
	<style>
	.header {
  overflow: hidden;
  background-color: #ffdb4d;
  padding: 20px 10px;
	}
	.header a {
  float: left;
  color: black;
  text-align: center;
  padding: 12px;
  text-decoration: none;
  font-size: 25px;
  line-height: 25px;
  border-radius: 4px;
	}
	.header-right {
    float: right;
  }
	</style>
	<meta charset="utf-8">
	<title>Servicio de Postulación a ayudantías Facultad de Ciencias Físicas y Matemáticas</title>

        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="styles.css" >

</head>

<body style="DarkBlue">
	<div class="header">
		<a href="index.php">Servicio de Postulación a Ayudantías</a>
	  <div class="header-right">
			<a class="logo" href="http://www.cfm.cl/"><img align="right" src="images/cfm.png" alt="cfm_h" /></a>
	    	  </div>
	</div>



</body>
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

            <li><a href="pasar_semestre.php">Limpiar base para pasar a semestre siguiente</a></li>
            <li role="separator" class="divider"></li> <!-- separa visualmente la lista  -->
            <li><a href="add_nuevos.php">Añadir nuevos docentes o asignaturas.</a></li>


          </ul>

        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Consultar <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="postulantes_del_semestre.php">Postulantes del semestre actual</a></li>
						<li><a href="contar_postulantes.php">Ramos según postulantes</a></li>

          </ul>

        </li>
      </ul>


    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

</html>
