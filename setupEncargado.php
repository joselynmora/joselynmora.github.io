<?php 
require_once 'conexion.php'; 
$error = $user = $pass =""; 

//iniciar session comprueba si los campos estan vacios, luego que los datos sean correctos si no no le da acceso
if (isset($_POST['user']))
{ 
  $user = trim($_POST['user']); 
  $pass = trim($_POST['pass']); 

  if ($user == "" || $pass == ""){
  ?>
  <h3 class="bad">¡Por favor complete los campos!</h3>
  <?php
  }else{ 
    $result = "SELECT CURP,password FROM encargado
      WHERE CURP='$user' AND password='$pass'"; 
      $resultado = mysqli_query($conexion,$result);

    if ($resultado->num_rows ==0)
    { 
      ?> 
	    <h3 class="bad">¡Ups, verifique sus datos!</h3>
      <?php 
    } 
    else{ 
      $_SESSION['user'] = $user; 
      $_SESSION['pass'] = $pass;
      header('location: funcionesEncargado.php');
     }
   }
 }
// formulario para que el usuario ponga sus datos y se pueda loguear
  echo <<<_END
  <!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="estilos.css">
</head>
<body>
	<header>
		<div class="logo2" style= "width: 2000px">
			<img src="imagenes/banner.png">
		</div>
	</header>

	<form method="post">
    	<h1>Inicie sesión</h1>
    	<input type="text" name='user' value='$user' placeholder="CURP">
    	<input type="password" name='pass' value='$pass' placeholder="Password">
    	<input type="submit" name="register">
    	<h6>¿No te has registrado?,<a href="http://localhost/Proyecto_BD/encargado.php">registráte aquí</a></h6>
      	<span class='error'>$error</span> 
    </form>
</body>
</html>
_END;
  ?> 