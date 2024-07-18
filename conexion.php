<?php

$host = "localhost";
$user = "root";
$clave = "";
$database = "sistema";
$table = "usuario";
$conexion = new mysqli($host, $user, $clave, $database);
if ($conexion->connect_errno) {

    die("Fallo al conectar a MySQL: (" . $conexion->connect_errno . ") ");
}

/*echo "<h1> Resultado Prueba </h1><ol>";

// Ejecuta la primera consulta para obtener la columna 'clave'
$sql = "SELECT clave FROM $table";
$result = $conexion->query($sql);

if ($result->num_rows > 0) {
    // Salida de datos de cada fila
    while ($row = $result->fetch_assoc()) {
        echo "<li>" . $row['clave'] . "</li>";
    }
} else {
    echo "<li>No hay resultados para 'clave'</li>";
}

echo '</ol><ol>';

// Ejecuta la segunda consulta para obtener la columna 'usuario'
$sql = "SELECT usuario FROM $table";
$result = $conexion->query($sql);

if ($result->num_rows > 0) {
    // Salida de datos de cada fila
    while ($row = $result->fetch_assoc()) {
        echo "<li>" . $row['usuario'] . "</li>";
    }
} else {
    echo "<li>No hay resultados para 'usuario'</li>";
}

echo '</ol>';/*

/* try{
        $conexion = new PDO("mysql:host=$host;dbname=$database", $user, $clave);
        echo "<h1> Resultado Prueba </h1><ol>";
        foreach($conexion->query("SELECT clave FROM $table") as $row){
            echo "<li>" . $row['clave'] . "</li>";
        }
        echo '</ol>';

        foreach($conexion->query("SELECT usuario FROM $table") as $row){
            echo "<li>" . $row['usuario'] . "</li>";
        }
        echo '</ol>';
    }catch (PDOException $e){
        print "Error!: " . $e->getMessage() . "<br/>";
        die();
    }*/
?>