<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Sistema de Postulación a ayudantías: Sección Administrador</title>
  <link type="text/css" rel="stylesheet" href="css/bootstrap.css"  media="screen,projection"/>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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
            <li><a href="Ingredientes.html">Algo que aún no se me ocurre jaja</a></li>


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
$mat_postulante=$_GET['post_matricula'];
echo $mat_postulante;
$consulta_horario="SELECT dispone.dia,dispone.hora FROM dispone WHERE dispone.matricula='".$mat_postulante."'";

$consulta_postula="SELECT ramo.nombre,ramo.codigo FROM ramo,postula WHERE ramo.codigo=postula.codigo AND postula.matricula='".$mat_postulante."'";

$consulta_curso="SELECT ramo.nombre,ramo.codigo,curso.calificacion FROM ramo,curso
WHERE ramo.codigo=curso.codigo AND postula.matricula='".$mat_postulante."'";

$consulta_ayudo="SELECT ramo.nombre,ramo.codigo,ayudo.codigo_semestre,profesor.nombre FROM ramo,ayudo,profesor,dicta
WHERE ramo.codigo=ayudo.codigo AND profesor.rut=dicta.rut AND dicta.codigo_semestre=ayudo.codigo_semestre
AND dicta.codigo=ramo.codigo AND ayudo.matricula='".$mat_postulante."'";  /* hay que verificar si esta consulta está bien hecha */


$tabla0 = $mysqli->query($consulta_horario);
$tabla1 = $mysqli->query($consulta_postula);
$tabla2 = $mysqli->query($consulta_curso);
$tabla3 = $mysqli->query($consulta_ayudo);
?>

<body>

  <!-- Tabla de horario -->
  <div class="container">
    <h2>Horario de disponibilidad del alumno <?php echo $mat_postulante;?></h2>
    <p>Tabla que muestra los horarios disponibles del alumno de matrícula <?php echo $mat_postulante;?> en el semestre actual.</p>
    <table class="table table-dark">
      <thead class="thead-dark">
        <tr>
          <th scope="col">Día</th>
          <th scope="col">Horario</th>
        </tr>
      </thead>

      <tbody>
        <?php while ($row = mysqli_fetch_array($tabla0)) { ?>
          <tr>
            <td><?php echo $row[0]; ?></td>
            <td><?php echo $row[1]; ?></td>
          </tr>
        <?php } ?>
      </tbody>
    </table>
  </div>

  <!-- Tabla de postulaciones -->
  <div class="container">
    <h2>Postulaciones del alumno <?php echo $mat_postulante;?></h2>
    <p>Tabla que muestra todos los ramos a los que ha postulado el alumno de matrícula <?php echo $mat_postulante;?> en el semestre actual.</p>
    <table class="table table-dark">
      <thead class="thead-dark">
        <tr>
          <th scope="col">Ramo</th>
          <th scope="col">Código</th>
        </tr>
      </thead>

      <tbody>
        <?php while ($row = mysqli_fetch_array($tabla1)) { ?>
          <tr>
            <td><?php echo $row[0]; ?></td>
            <td><?php echo $row[1]; ?></td>
          </tr>
        <?php } ?>
      </tbody>
    </table>
  </div>

  <!-- Tabla de cursos cursados -->

  <div class="container">
    <h2>Ramos cursados <?php echo $mat_postulante;?></h2>
    <p>Tabla que muestra los ramos que ha cursado el alumno de matrícula. <?php echo $mat_postulante;?>. </p>
    <table class="table table-dark">
      <thead class="thead-dark">
        <tr>
          <th scope="col">Ramo</th>
          <th scope="col">Código</th>
          <th scope="col">Calificación</th>
        </tr>
      </thead>

      <tbody>
        <?php while ($row = mysqli_fetch_array($tabla2)) { ?>
          <tr>
            <td><?php echo $row[0]; ?></td>
            <td><?php echo $row[1]; ?></td>
            <td><?php echo $row[1]; ?></td>
          </tr>
        <?php } ?>
      </tbody>
    </table>
  </div>

  <!-- Tabla de ayudantías pasadas-->

  <div class="container">
    <h2>Ayudantías que ha hecho el alumno <?php echo $mat_postulante;?></h2>
    <p>Tabla que muestras los ramos en los que el alumno ha ayudado.<?php echo $mat_postulante;?>. </p>
    <table class="table table-dark">
      <thead class="thead-dark">
        <tr>
          <th scope="col">Ramo</th>
          <th scope="col">Código</th>
          <th scope="col">Semestre</th>
          <th scope="col">Docente</th>
        </tr>
      </thead>

      <tbody>
        <?php while ($row = mysqli_fetch_array($tabla3)) { ?>
          <tr>
            <td><?php echo $row[0]; ?></td>
            <td><?php echo $row[1]; ?></td>
            <td><?php echo $row[2]; ?></td>
            <td><?php echo $row[3]; ?></td>
          </tr>
        <?php } ?>
      </tbody>
    </table>
  </div>


</body>
