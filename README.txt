================================================================
SISTEMA PARA REGISTRO DE POSTULACIONES Y AYUDANTES FCFM UDEC
================================================================
En lo que sigue se presentan todas las instrucciones detalladas 
para  la correcta instalaci�n, funcionamiento, y aplicaci�n del 
sistema de registro de postulaciones para la facultad de ciencias
f�sicas y matem�ticas de la UNIVERSIDAD DE CONCEPCI�N, CONCEPCI�N.

======================
REQUERIMIENTOS B�SICOS
======================
Requisitos m�nimos de Hardware

	Pentium III o equivalente, 1 ghz o superior
	512 MB RAM, se recomienda 1 GB o m�s
	1,5 GB NTFS o 3 GB FAT o m�s de espacio disponible en disco
	Microsoft Windows 10, Windows 8, Windows 8.1, Windows 7, Windows Vista.
Requisitos m�nimos de software:
-Puede ser instalado en cualquier sistema operativo que soporte Xampp y un navegador.
-Navegador a elecci�n: 
   Opciones de preferencia:
           1) Mozilla Firefox: https://www.mozilla.org/es-CL/firefox/download/thanks/
           2) Google Chrome  :https://www.google.com/chrome/
- Para xampp:
- Computador con requerimientos m�nimos para correr Xampp
  revisar manual de instalaci�n xampp: http://bibing.us.es/proyectos/abreproy/12197/fichero/Manual+de+instalacion.pdf
- Descompresor a elecci�n: Zip o WinRar.
//como alternativa puede instalar alg�n gestor de archivos GitHub como MINGW64//

============================================
INSTALACI�N DE SISTEMA
============================================
Se asume que todos los programas anteriormente mencionados fueron correctamente instalados.
	|--------------------------------
	| Descarga de archivos necesarios
	|--------------------------------

	1) Dirigirse a la p�gina: https://github.com/gobenavides/SISCOM
	2) Descargar o clonar "clone or download" los archivos necesarios. 
	   Descomprimir los archivos descargados en una carpeta llamada "SISCOM" copiarlos a la carpeta por defecto C:\xampp\htdocs

	// Alternativamente con MINGW64 ir a la carpeta por defecto C:\xampp\htdocs y realizar un git clone https://github.com/gobenavides/SISCOM

	|--------------------------------
	| Preparaci�n de base de datos
	|--------------------------------
	En lo que sigue se tiene como base el GUI de Xamp v3.2.2.
	1) Abrir Xampp.
	2) Activar modulo  Apache y  MySQL, haciendo click en  Start en ambas acciones.
	3) Hacer click en "Admin" de MySQL
	4) Al abrirse phpMyAdmin en su navegador de preferencia el usuario debe crear dos bases de datos para ello
		- Hacer click  en "Nueva" esto deber� abrir un cuadro a la derecha para la creaci�n de una base de datos.
		- En el cuadro "Bases de datos" que se acaba de abrir crear una base de datos con el nombre "proyecto"
		- Luego de creada la base de datos importar la base de datos  "SQL_BASEDATOS_SISCOM.sql" desde C:\xampp\htdocs\SISCOM.
		- Esto crear� un conjunto de Base de datos para probar el sistema.
		- Nuevamente hacer click  en "Nueva" esto deber� abrir un cuadro a la derecha para la creaci�n de una base de datos.
		- En el cuadro "Bases de datos" que se acaba de abrir crear una base de datos con el nombre "registration"
		- Luego de creada la base de datos importar la base de datos  "registration.sql" desde C:\xampp\htdocs\SISCOM.
		- Esto crear� un conjunto de Base de datos para probar el sistema.
	5) Ya est� lista la estructura de la Base de datos que se ocupar�.
============================================
INGRESO DE POSTULANTES
============================================
Para el ingreso de postulantes debe abrir el navegador de preferencia e introducir en  la barra web http://localhost/SISCOM
se abrir� la p�gina principal del sistema con la cual puede acceder a todas las funciones del sistema. 
	1) Para ingresar un postulante nuevo:
		-Hacer click en postulante nuevo
		-Completar el formulario de postulaci�n
		-Hacer click  en el bot�n  "postulante nuevo" al final de la p�gina.
		-Esperar la confirmaci�n exitosa del sistema.
	2) Para ingresar un Postulante Ya Registrado:
		// Se debe tener un usuario ya registrado//
		-Hacer click en Postulante Ya Registrado
		-Completar el formulario de postulaci�n
		-Hacer click  en el bot�n  "Postulante Ya Registrado" al final de la p�gina.
		-Esperar la confirmaci�n exitosa del sistema.

============================================
ADMINISTRAR POSTULACIONES
============================================
Para el ingreso de postulantes debe abrir el navegador de preferencia e introducir en  la barra web http://localhost/SISCOM
se abrir� la p�gina principal del sistema con la cual puede acceder a todas las funciones del sistema. 
Como usuario principal con car�cter de administrador, tiene el permiso de aceptar o rechazar postulaciones, en lo que sigue
se explicar� como realizar estas acciones.
	1) Hacer click  en Administrador
	2) Completar los datos de ingreso de Administrador.
	3) Hacer click en continuar
	4) Tiene la opci�n de registrar o consultar
	REGISTRAR:
		-Limpiar bases de datos para pasar al siguiente semestre.
		 Esa acci�n no borra la base de datos anterior, pasa al siguiente semestre.
		-A�adir nuevos docentes  o asignaturas.
	CONSULTAR:
		-Postulantes del semestre actual muestra  los postulantes de un ramo en espec�fico y los postulantes del semestre, en lo que puede aceptar o rechazar postulaciones.
		-Ramos seg�n postulantes muestra los ramos sin ayudantes designados y los ramos con ayudantes ya designados.
============================================
Salir del sistema
============================================
Para salir del sistema basta con salir del navegador, luego cerrar Xampp y con ello desconectar el servidor  local.












