<?php
session_start();
$usuario = $_SESSION['username'];
echo "<h1>BIENVENIDO $usuario</h1>"
?>