<?php
session_start();

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true) {
echo "Acceso denegado. Inicie sesión como administrador para ver esta página";
die();
}
?>

<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Sistema de Postulación a ayudantías: Sección Administrador</title>
  <link type="text/css" rel="stylesheet" href="css/bootstrap.css"  media="screen,projection"/>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <?php include("cabecera.php");?>
</head>


<?php
include("connect_db.php");
$mat_postulante=$_GET['post_matricula'];

$name_query="SELECT postulante.nombre FROM postulante WHERE postulante.matricula='".$mat_postulante."'";
$nombre_postulante = $mysqli->query($name_query);
$nombre_postulante = mysqli_fetch_array($nombre_postulante)[0];

/* ------------------------------------------ */

$consulta_horario="SELECT dispone.dia,dispone.hora FROM dispone WHERE dispone.matricula='".$mat_postulante."'";

$consulta_postula="SELECT ramo.nombre,ramo.codigo FROM ramo,postula WHERE ramo.codigo=postula.codigo AND postula.matricula='".$mat_postulante."'";

$consulta_curso="SELECT DISTINCT ramo.nombre,ramo.codigo,curso.calificacion FROM ramo,curso,postula
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
    <h2>Horario de disponibilidad del alumno <?php echo $nombre_postulante;?></h2>
    <p>Tabla que muestra los horarios disponibles de <?php echo $nombre_postulante;?> en el semestre actual.</p>
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
    <h2>Postulaciones del alumno <?php echo $nombre_postulante;?></h2>
    <p>Tabla que muestra todos los ramos a los que ha postulado <?php echo $nombre_postulante;?> en el semestre actual.</p>
<form action='aceptar-ayudante2.php' method=post>
    <table class="table table-dark">
      <thead class="thead-dark">
        <tr>
          <th scope="col">Ramo</th>
          <th scope="col">Código</th>
          <th scope="col">Aceptar</th>
        </tr>
      </thead>

      <tbody>
        <?php while ($row = mysqli_fetch_array($tabla1)) { ?>
          <tr>
            <td><?php echo $row[0]; ?></td>
            <td><?php echo $row[1]; ?></td>
            <td><input type="checkbox" name="aceptar[]" value="<?php echo $row[1]; ?>"></td>
          </tr>
        <?php } ?>
      </tbody>
    </table>

  <input type="hidden" name="mat_postulante" value="<?php echo $mat_postulante; ?>">

  <p><input type="submit" value="aceptar ramos seleccionados."></p></form>
  <!-- Tabla de cursos cursados -->
  </div>
  <div class="container">
    <h2>Ramos cursados por <?php echo $nombre_postulante;?></h2>
    <p>Tabla que muestra los ramos que ha cursado <?php echo $nombre_postulante;?>. </p>
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
            <td><?php echo $row[2]; ?></td>
          </tr>
        <?php } ?>
      </tbody>
    </table>
  </div>

  <!-- Tabla de ayudantías pasadas-->

  <div class="container">
    <h2>Ayudantías que ha hecho el alumno <?php echo $nombre_postulante;?></h2>
    <p>Tabla que muestras los ramos en los que el alumno ha ayudado.<?php echo $nombre_postulante;?>. </p>
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
<?php include("pie-de-pag.php");?>
