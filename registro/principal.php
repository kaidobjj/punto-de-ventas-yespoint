<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar sesión</title>
    <style>
        body {
            background-color: seagreen;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        form {
            padding: 50px; /* Ajuste del espacio interno del formulario */
            border-radius: 10px; /* Ajuste del radio de la esquina del formulario */
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            background-color: whitesmoke;
        }
    </style>
</head>

     <div class="logo-container">
        <img src="logo2.jpeg" alt="Logo de la empresa" class="logo">
    </div>
    <form method="post" action="Inicio.php"> <!-- Ajusta el nombre del archivo PHP -->
        <h2>Iniciar sesión</h2>
        <label for="nombredeusuario">Usuario:</label>
        <input type="text" id="nombredeusuario" name="nombredeusuario" required><br>

        <label for="contraseña">Contraseña:</label>
        <input type="password" id="contraseña" name="contraseña" required><br>

        <input type="submit" value="Iniciar sesión"><br>
        <br><a href="registro.php" class="register-link">¿No tienes una cuenta? ¡Regístrate aquí!</a>
    </form>
</body>

</html>