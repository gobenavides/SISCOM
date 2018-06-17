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

  <?php
  include("connect_db.php");
  $sql_general="SELECT * FROM postulante";
  $sql_ramos="SELECT DISTINCT nombre FROM ramo";
  $result_general = $mysqli->query($sql_general);
  $ramos = $mysqli->query($sql_ramos);
  ?>

  <!-- tabla-->
  <body>
    <div class="container">
      <h2>Postulantes del semestre</h2>
      <p>Tabla que muestra todos los postulantes del semestre actual</p>
      <table class="table table-dark">
        <thead class="thead-dark">
          <tr>
            <th scope="col">Matrícula</th>
            <th scope="col">Nombre</th>
            <th scope="col">Correo</th>
          </tr>
        </thead>

        <tbody>
          <?php while ($row = mysqli_fetch_array($result_general)) { ?>
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
      <h2></h2>
      <p>Mostrar postulantes por ramo</p>
      <form action="postulantes_de_ramo.php", method="post">
        <div class="form-group">
          <label for="sel1">Seleccione el código de un ramo</label>
          <select class="form-control" id="sel1">
            <?php while ($row = mysqli_fetch_array($ramos)) { ?>
              <tr>
                <option><?php echo $row[0]; ?></option>
              </tr>
            <?php } ?>
          </select>
        </div>
        <button type="submit" name="nombre_ramo" class="btn btn-default">Submit</button>
      </form>
    </div>







  </body>
