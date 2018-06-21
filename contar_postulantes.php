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
  $sql_sin="SELECT DISTINCT ramo.nombre,ramo.codigo,profesor.nombre
              FROM ramo,postula,dicta,profesor
              WHERE dicta.rut=profesor.rut AND dicta.codigo=ramo.codigo
              AND NOT ramo.codigo = ANY (SELECT postula.codigo
              FROM postula WHERE postula.seleccionado=1)";
  $sql_con="SELECT ramo.nombre,ramo.codigo,postula.matricula,profesor.nombre
              FROM ramo,postula,dicta,profesor
              WHERE dicta.rut=profesor.rut AND dicta.codigo=ramo.codigo AND
              ramo.codigo = postula.codigo AND postula.seleccionado=1";
  $ramos_con = $mysqli->query($sql_con);
  $ramos_sin = $mysqli->query($sql_sin);
  ?>

  <!-- tabla-->
  <body>

    <div class="container">
      <h2></h2>
      <p>Mostrar ramos que no cuentan con ayudante.</p>
      <table class="table table-dark">
        <thead class="thead-dark">
          <tr>
            <th scope="col">Nombre</th>
            <th scope="col">Código</th>
            <th scope="col">Docente</th>
          </tr>
        </thead>

        <tbody>
          <?php while ($row = mysqli_fetch_array($ramos_sin)) { ?>
            <tr>
              <td><?php echo $row[0]; ?></td>
              <td><?php echo $row[1]; ?></td>
              <td><?php echo $row[2]; ?></td>
            </tr>
          <?php } ?>
        </tbody>
      </table>

    </div>
    <div class="container">
      <p>Mostrar ramos que sí cuentan con ayudante.</p>
      <table class="table table-dark">
        <thead class="thead-dark">
          <tr>
            <th scope="col">Nombre</th>
            <th scope="col">Código</th>
            <th scope="col">Matrícula</th>
          </tr>
        </thead>

        <tbody>
          <?php while ($row = mysqli_fetch_array($ramos_con)) { ?>
            <tr>
              <td><?php echo $row[0]; ?></td>
              <td><?php echo $row[1]; ?></td>
              <td><?php echo $row[2]; ?></td>
            </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>








  </body>

  <?php include("pie-de-pag.php");?>
