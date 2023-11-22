<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

// Verifica si el formulario se ha enviado utilizando el método POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // Recuperar los datos del formulario
    $nombre = $_POST["nombre"];
    $apellido_paterno = $_POST["ape_pterno"];
    $apellido_materno = $_POST["ape_materno"];
    $nombre_usuario = $_POST["nombredeusuario"];
    $contrasena = $_POST["contrasena"];

    // Validar y procesar los datos (puedes agregar más validaciones según tus necesidades)

    // Conectar a la base de datos
    $servername = "127.0.0.1";
    $username = "root";
    $password = "";
    $dbname = "cuentas";

    $enlace = new mysqli($servername, $username, $password, $dbname);

    // Verificar la conexión
    if ($enlace->connect_error) {
        die("Conexión fallida: " . $enlace->connect_error);
    }
    //para generar pruebas de los datos enviados 
var_dump('nombre'.$nombre);
var_dump('ape_pterno'.$apellido_paterno);
var_dump('ape_materno'.$apellido_materno);
var_dump('nombredeusuario'.$nombre_usuario);
var_dump('contrasena'.$contrasena);
    // Insertar datos en la base de datos 
    $query = "INSERT INTO sesiones (nombre, ape_pterno, ape_materno, nombredeusuario, contrasena) 
              VALUES ('$nombre', '$apellido_paterno', '$apellido_materno', '$nombre_usuario', '$contrasena')";

    if ($enlace->query($query) === TRUE) {
        echo "Registro exitoso";
    } else {
        echo "Error al registrar : " . $enlace->error;
    }

    // Cerrar la conexión
    $enlace->close();

}
?>