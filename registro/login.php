<?php
 ini_set('display_errors', '1');
 ini_set('display_startup_errors', '1');
 error_reporting(E_ALL);
// Conexión a la base de datos
$host = "127.0.0.1";
$usuario = "root";
$password = "";
$dbname = "cuentas";

$conexion =  mysqli_connect($host, $usuario, $password, $dbname);
// Verificar la conexión

if ($conexion) {
    echo("conexión a la base de datos: ");
} else {
        echo "Credenciales incorrectas. Inténtalo de nuevo.";
}
?>
