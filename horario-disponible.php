<html>
<body>

<?php
$servername = "localhost";
$dbname = "siscom";

// Create connection
$conn = mysqli_connect($servername,$dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}else{
echo "postulante ingresado";}

mysqli_close($conn);
?>

</body>
</html>