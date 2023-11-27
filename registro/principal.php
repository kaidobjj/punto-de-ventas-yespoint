<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar sesión</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <style>
    body {
    background: linear-gradient(to bottom right, #f6a9ff, #e3a1ff, #cf99ff, #ba91ff, #a588ff, #927fff, #7e77ff, #6a6eff, #5566ff);
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    margin: 0;
     }

    form {
    font-family: "Homer Simpson UI";
    font-size: 100%;
    font-style: oblique;
    border-radius: 15px;
    box-shadow: 20px 10px 10px rgba(0.1, 0.2, 0.4, 0.8);
    background-color: rgba(255, 255, 255, 0.7);
    padding: 20px; 
    width: 300px; 
    max-width: 400px;
    display: block; 
      }

   .logo-container {
    display: flex;
    justify-content: center;
    align-items: center;
    margin-bottom: 15px;
      }

    .logo {
    width: 100px;
     }
    h1 {
    text-align: center;
    margin-bottom: 20px; 
     }

    form label,
    form input {
    display: block;
    margin: 0px 0; 
    width: 100%; 
      }

    button {
    width: 100%;
    margin-top: 07px; 
      }
   .register-link {
    text-align: center;
    display: flex;
    margin-top: 0px;
      }

    button + .register-link {
    margin-top: 0px;
       }
        .fa {
            display: none;
        }
    </style>
</head>

<body>
    

    <form id="contenido" method="post" action="login2.js">
    <div class="logo-container">
        <img src="ab.jpeg" alt="Logo de la empresa" class="logo">
    </div>
        <h1>Iniciar sesión</h1> 
        <label for="nombredeusuario">Usuario:</label>
        <input type="text" id="nombredeusuario" name="nombredeusuario" required><br>

        <label for="contraseña">Contraseña:</label>
        <input type="password" id="contraseña" name="contraseña" required><br>

        <button id="btn" class="btn btn-info mt-3" type="submit">Iniciar sesión</button><br>
        <i class="fa-regular fa-rotate-right fa-spin"></i>
        <br><a href="registro.php" class="register-link">¿No tienes una cuenta? ¡Regístrate aquí!</a>
    </form>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="login2.js"></script>
</body>

</html>
