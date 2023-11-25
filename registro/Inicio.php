<?php
require 'login.php';
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $usuario = $_POST['nombre'];
    $contraseña = $_POST['pass'];
    
    $q = "SELECT * FROM `sessiones` WHERE `nombredeusuario`= '$usuario' and `contraseña`='$contraseña'";
    $consulta = mysqli_query($conexion, $q);
    
    if ($consulta) {
        $array = mysqli_fetch_array($consulta);

        if (!is_null($array)) {
           
            
            echo "bienvenido";
        } else {
    
            echo "Datos Incorrectos";
       }
    } else {
        $respuesta = array('error' => 'Error en la consulta SQL');
        echo json_encode($respuesta);
    }
}
?>