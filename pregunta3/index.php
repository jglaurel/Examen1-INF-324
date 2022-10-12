<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/bootstrap.css">
    
    <title>Inicio Sesión</title>
</head>
<body background="img/fondo.jpg">
<div class="login-page">
   <div class="form-control">
      <form class="login-form" action="login.php" method="GET">
         <label for="Email">Inicio de sesion</label>
         <input type="email" class="form-control" id="Email" aria-describedby="emailHelp" placeholder="Enter email" name="usuario">
         <small id="emailHelp" class="form-text text-muted">Nosotros no compatiremos tu contraseña con nadie.</small>
         <label for="Password">Password</label>
         <input type="password" class="form-control" id="Password" placeholder="Password" name="password">
         <input  class="btn btn-primary" type="submit" value="INICIAR SESIÓN">
      </form>
   </div>
</div>