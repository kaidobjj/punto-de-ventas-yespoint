<?php
$config= include("config.php");

$hostname = $config["hostname"];
$usuario = $config["usuario"];
$password = $config["password"];
$dbname = $config["dbname"];

$conexion =  mysqli_connect($hostname, $usuario, $password, $dbname);

if (!$conexion) {
    echo "Credenciales incorrectas. Inténtalo de nuevo.";
}
   
      
?>
