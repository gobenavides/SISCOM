<head>
  <meta charset="UTF-8">
  <title>Sistema de Postulación a ayudantías: Sección Administrador</title>
  <link type="text/css" rel="stylesheet" href="css/bootstrap.css"  media="screen,projection"/>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<?php
include("connect_db.php");
$cod_ramo= $_POST["codigo_ramo"];
$sql="SELECT postulante.nombre,postula.codigo FROM postulante, postula WHERE postulante.matricula=postula.matricula AND postula.codigo=".$cod_ramo;
echo $sql;
$tabla = $mysqli->query($sql);
?>

<body>
  <div class="container">
    <h2>Postulantes de <?php echo $cod_ramo;?></h2>
    <p>Tabla que muestra todos los postulantes del ramo <?php echo $cod_ramo;?> seleccionado del semestre actual</p>
    <table class="table table-dark">
      <thead class="thead-dark">
        <tr>
          <th scope="col">Nombre</th>
          <th scope="col">Código</th>
        </tr>
      </thead>

      <tbody>
        <?php while ($row = mysqli_fetch_array($tabla)) { ?>
          <tr>
            <td><?php echo $row[0]; ?></td>
            <td><?php echo $row[1]; ?></td>
          </tr>
        <?php } ?>
      </tbody>
    </table>
  </div>
</body>
