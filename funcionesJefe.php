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
			<img src="banner.png">
		</div>
	</header>

	<form method="post">
    	<h1>¡Bienvenido!, ¿qué deseas hacer?</h1>
    	<button onclick="location.href='http://localhost/Proyecto_BD/actividad.php'" type="button" style="background-color: #48e; color: white; border-color: white;"> Agregar actividad</button>
    	<button onclick="location.href='http://localhost/Proyecto_BD/catalogo.php'" type="button" style="background-color: #48e; color: white; border-color: white;"> Lista de actividades</button>
    	<button onclick="location.href='http://localhost/Proyecto_BD/listaEncargados.php'" type="button" style="background-color: #48e; color: white; border-color: white;"> Lista de encargados</button>
    	<button onclick="location.href='http://localhost/Proyecto_BD/listaAlumnos.php'" type="button" style="background-color: #48e; color: white; border-color: white;"> Lista de alumnos</button>
    	<button onclick="location.href=''" type="button" style="background-color: #48e; color: white; border-color: white;"> Cerrar sesión</button>
    </form>
</body>
</html>