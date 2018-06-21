<?php
session_start();

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true) {
echo "Acceso denegado. Inicie sesión como administrador para ver esta página";
die();
}
?>
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
$cod_ramo= $_POST["codigo_ramo"];
$sql="SELECT postulante.nombre,postulante.matricula,postulante.correo,postula.solicitado
FROM postulante, postula WHERE postulante.matricula=postula.matricula AND postula.codigo='".$cod_ramo."'";

$sql2="SELECT DISTINCT postulante.nombre,postulante.matricula,postulante.correo,postula.solicitado
FROM postulante, postula,dispone,tiene
WHERE postulante.matricula=postula.matricula AND postula.codigo='".$cod_ramo."'
AND tiene.codigo='".$cod_ramo."' AND postulante.matricula = ANY (SELECT dispone.matricula
  FROM dispone,tiene WHERE tiene.codigo='".$cod_ramo."'
  AND dispone.dia=tiene.dia AND dispone.hora=tiene.hora )";


$tabla = $mysqli->query($sql);
$tabla2= $mysqli->query($sql2);
?>

<body>
  <div class="container">
    <h2>Postulantes de <?php echo $cod_ramo;?></h2>
    <p>Tabla que muestra todos los postulantes del ramo <?php echo $cod_ramo;?> seleccionado del semestre actual</p>
    	<form action='aceptar-ayudante.php' method=post>
    <table class="table table-dark">
      <thead class="thead-dark">
        <tr>
          <th scope="col">Nombre</th>
          <th scope="col"> </th>
          <th scope="col">Matrícula</th>
          <th scope="col">Correo</th>
          <th scope="col">Solicitado</th>
          <th scope="col">Aceptar</th>
        </tr>
      </thead>

      <tbody>
        <?php while ($row = mysqli_fetch_array($tabla)) { ?>
          <tr>
            <td><?php echo $row[0]; ?></td>
            <td><a href="info_postulante.php?post_matricula=<?php echo $row[1]; ?>">(ver detalles)</a></td>
            <td><?php echo $row[1]; ?></td>
            <td><?php echo $row[2]; ?></td>
            <td><?php echo $row[3]; ?></td>
            <td><input type="checkbox" name="aceptar[]" value="<?php echo $row[1]; ?>"></td>
          </tr>
        <?php } ?>
      </tbody>
    </table>
    <input type="hidden" name="codigo" value="<?php echo $_POST["codigo_ramo"]; ?>">

    <p><input type="submit" value="aceptar postulantes seleccionados."></p></form>
  </div>

  <div class="container">
    <h2>Postulantes de <?php echo $cod_ramo;?> con disponibilidad de horario compatible</h2>
    <p>Tabla que muestra todos los postulantes del ramo <?php echo $cod_ramo;?> seleccionado del semestre actual con disponibilidad compatible.</p>
    <table class="table table-dark">
      <thead class="thead-dark">
        <tr>
          <th scope="col">Nombre</th>
          <th scope="col">Matrícula</th>
          <th scope="col">Correo</th>
          <th scope="col">Solicitado </th>
        </tr>
      </thead>

      <tbody>
        <?php while ($row = mysqli_fetch_array($tabla2)) { ?>
          <tr>
            <td><?php echo $row[0]; ?></td>
            <td><?php echo $row[1]; ?></td>
            <td><?php echo $row[2]; ?></td>
            <td><?php echo $row[3]; ?></td>
            <td><a href="info_postulante.php?post_matricula=<?php echo $row[1]; ?>">(ver detalles)</a></td>

          </tr>
        <?php } ?>
      </tbody>
    </table>
  </div>
</body>
<?php include("pie-de-pag.php");?>
