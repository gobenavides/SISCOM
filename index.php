<!DOCTYPE html>
<html lang="es">

<head>
      <meta charset="UTF-8">
      <style>
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
}

li {
    float: left;
}

li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover:not(.active) {
    background-color: #111;
}

.active {
    background-color: #000080;
}
</style>

      <link type="text/css" rel="stylesheet" href="css/bootstrap.css"  media="screen,projection"/>   <!-- Aca añado mis documentos que contienen los estilos, que utilizare en nuestra pagina, <link> nos indica que utilizaremos el documento indicado en href="documento", en este caso es el framework bootstrap del que les hable y el que les recomiendo usar. Bootstrap tiene estilos css y funciones javascript que debemos importar (referirnos a ella con link), en este caso estamos añadiendo la parte de estilos(css) y en la siguiente linea añadiremos la parte javascript (es un lenguaje de programacion orientado a desarrollo web, nos ayuda a crear páginas dinámicas, cualquier duda me dicen)  -->

      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> <!-- Importe ajax, no se preocupen por esto pero les puede ser utíl para quien quiera aprender más -->
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script><!-- Parte Js de bootstrap -->

      <?php include("cabecera.php");?>

</head>


<div align="center">
  <body>



    <nav class="navbar navbar-default"> <!-- Todo lo que estè dentro de nav sera la barra de navegacion -->
      <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Servicio postulación a ayudantías </a> <!-- las etiquetas a nos indica que el texto dentro de la etiqueta será un link a otra página (docimento), el elemento será clickeable y al hacerlo redirigirá a la página indicada dentro de las comillas en el atributo href, en este caso al hacer click en café, nos redirige a "index.html" que en este caso es la misma pagina, pero podría llamar a otra pagina ej: href="pagina2.html", en este caso no la he creado así que les dirá que la página no se encuentra, para crearla deben crearla en el mismo directorio donde está su página, si la añaden en una carpeta deben incluir el nombre de la carpeta (href="carpeta/pagina2.html") -->
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav"> <!-- esto es una lista desordenada -->
            <li class="active"><a href="administrador.php">Administrador<span class="sr-only">(current)</span></a></li> <!-- Falta crear página de adminitrador-->
            <li class="active"><a href="postulante0.php">Postulante Nuevo<span class="sr-only">(current)</span></a></li>
            <li class="active"><a href="postulante1.php">Postulante Ya Registrado<span class="sr-only">(current)</span></a></li>
              </ul>

            </li>
          </ul>


        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>

    <!-- aquí empieza lo que está debajo del menú superior-->
  <b>Facultad de Ciencias Físicas y Matemáticas</b><br>
  <b>Universidad de Concepción</b>


    </body>
  </div>

  </html>
