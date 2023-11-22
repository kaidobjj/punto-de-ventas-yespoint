<?php
require 'login.php';
session_start();
$usuario= $_POST['nombredeusuario'];
$contraseña=$_POST['contraseña'];
$q = "SELECT * FROM `sessiones` WHERE `nombredeusuario`= '$usuario' and `contraseña`='$contraseña'";
$consulta = mysqli_query($conexion,$q);
$array = mysqli_fetch_array($consulta);
if(!is_null($array)){
    $_SESSION["username"] = $usuario;
    header("location: bienbenida.php");
}else{
    echo "DATOS INCORRECTOS";
}
?>

