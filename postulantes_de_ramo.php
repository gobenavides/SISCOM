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
