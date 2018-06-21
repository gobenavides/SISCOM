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
  $sql_general="SELECT * FROM postulante";
  $sql_ramos="SELECT codigo FROM ramo";
  $result_general = $mysqli->query($sql_general);
  $ramos = $mysqli->query($sql_ramos);
  ?>

  <!-- tabla-->
  <body>

    <div class="container">
      <h2></h2>
      <p>Mostrar postulantes de un ramo específico.</p>

      <form action="postulantes_de_ramo.php" method="POST">
        <div class="form-group">
          <label for="sel1">Seleccione el código de un ramo</label>
          <select class="form-control" name="codigo_ramo">
            <?php while ($row = mysqli_fetch_array($ramos)) { ?>
              <tr>

                <option value="<?php echo $row[0]; ?>" > <?php echo $row[0]; ?></option> <!-- FALTA VER COMO PONER EL VALUE!!!!!! -->
              </tr>
            <?php } ?>
          </select>
        </div>
        <button type="submit" class="btn btn-default">Consultar</button>  <!-- FALTA VER COMO PONER EL VALUE!!!!! -->
      </form>
    </div>
    <div class="container">
      <h2>Postulantes del semestre</h2>
      <table class="table table-dark">
        <thead class="thead-dark">
          <tr>
            <th scope="col">Matrícula</th>
            <th scope="col"></th>
            <th scope="col">Nombre</th>
            <th scope="col">Correo</th>
          </tr>
        </thead>

        <tbody>
          <?php while ($row = mysqli_fetch_array($result_general)) { ?>
            <tr>
              <td><?php echo $row[0]; ?></td>
              <td><a href="info_postulante.php?post_matricula=<?php echo $row[0]; ?>">(ver detalles)</a></td>
              <td><?php echo $row[1]; ?></td>
              <td><?php echo $row[2]; ?></td>
            </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>








  </body>

  <?php include("pie-de-pag.php");?>
