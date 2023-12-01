
<?php
require 'conexion.php';
include ('consulta.php');
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $usuario = mysqli_real_escape_string($conexion, $_POST['nombre']);
    $contraseña = mysqli_real_escape_string($conexion, $_POST['pass']);

    $q = "SELECT * FROM `sessiones` WHERE `nombredeusuario`= '$usuario' and `contraseña`='$contraseña'";
    $consulta = mysqli_query($conexion, $q);
    
}
?>






