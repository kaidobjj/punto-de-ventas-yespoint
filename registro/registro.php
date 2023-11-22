<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registro de Usuario</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #D0FFFA;
      margin: 0;
      display: flex;
      align-items: center;
      justify-content: center;
      height: 100vh;
    }

    .register-container {
      background-color: #fff;
      padding: 20px;
      border-radius: 8px;
      box-shadow: 0 0 50px rgba(0, 0, 0, 0.5);
      width: 300px;
      text-align: center;
    }

    input {
      width: 100%;
      padding: 10px;
      margin: 8px 0;
      box-sizing: border-box;
    }

    button {
      width: 100%;
      padding: 10px;
      background-color: #3498db;
      color: #fff;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }

    .login-link {
      margin-top: 10px;
      color: #3498db;
      text-decoration: none;
      display: block;
    }
    .logo {
    width: 100px;
    height: auto;
    position: absolute;
    margin-bottom: 20px; 
    top: -0px;
    left: -30px;
    transform: rotate(45deg); /* Rotar 45 grados para formar un rombo */
  }
  </style>
</head>
<body>

<div class="register-container">
    <img src="../img/a.jpg" alt="Logo de la empresa" class="logo">
    <form method="post" action="registrar.php">
      <h2>Registro de Usuario</h2>
      <input type="text" name="nombre" placeholder="nombre" required>
      <input type="text" name="ape_pterno" placeholder="ape_pterno" required>
      <input type="text" name="ape_materno" placeholder="ape_materno" required>
      <input type="text" name="nombredeusuario" placeholder="nombredeusuario" required>
      <input type="password" name="contrasena" placeholder="Contrasena" required>
      <button type="submit">Registrar</button>
    </form>
    <a href="#" class="login-link">Ya tengo un usuario</a>
  </div>

</body>
</html>
