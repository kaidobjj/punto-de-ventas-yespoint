<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar sesión</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    
    
    <style>
        body {
            background-color: wheat;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        html {
  font-size: 1em;
}

h1 {
  font-size: 2rem;
}

@media only screen and (max-width: 768px) {
    body {
        font-size: 16px;
    }
}
@media only screen and (max-width: 480px) {
    
    body {
        font-size: 14px;
    }
  }
        form{
            justify-content: center;
            align-items: center;
            padding: 75px;
            border-radius: 30px; 
            box-shadow: 10px 10px 20px rgba(0, 0, 0, 0.1);
            background-color: whitesmoke;
        }
        .fa{
            display: none;
        }
    </style>
</head>

     <h1><div class="logo-container">
        <img src="logo2.jpeg" alt="Logo de la empresa" class="logo">
    </div></h1>
    <form id="contenido" method="post" action="login2.js"> <!-- Ajusta el nombre del archivo PHP -->
        <h2>Iniciar sesión</h2>
        <label for="nombredeusuario">Usuario:</label>
        <input type="text" id="nombredeusuario" name="nombredeusuario" required><br>

        <label for="contraseña">Contraseña:</label>
        <input type="password" id="contraseña" name="contraseña" required><br>
       
        <button id="btn" class="btn btn-info mt-3" type="submit" >Iniciar sesión</button><br> 
        <i class="fa-regular fa-rotate-right fa-spin"></i>
        <br><a href="registro.php" class="register-link">¿No tienes una cuenta? ¡Regístrate aquí!</a>
   </form>

   <script
  src="https://code.jquery.com/jquery-3.7.1.min.js"
  integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo="
  crossorigin="anonymous"></script>
  <script src= "login2.js"></script>
</body>

</html>