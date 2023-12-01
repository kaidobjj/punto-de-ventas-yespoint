<?php
require 'formulario.php';
include ('conexion.php');
if ($consulta) {
    $array = mysqli_fetch_array($consulta);

    if (!is_null($array)) {
        echo "Bienvenido";
    } else {
        echo "Datos Incorrectos";
    }
} else {
    $respuesta = array('error' => 'Error en la consulta SQL');
}
?>