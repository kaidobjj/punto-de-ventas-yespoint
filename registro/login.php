<?php
$host = "127.0.0.1";
$usuario = "root";
$password = "";
$dbname = "sessiones";

$conexion =  mysqli_connect($host, $usuario, $password, $dbname);

if (!$conexion) {
    echo "Credenciales incorrectas. Inténtalo de nuevo.";
}
   
      
?>
