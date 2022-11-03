<?php
	include ("conexion.php");
	$lista= "SELECT * FROM Alumno";
?>
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
	<form style="padding: 0px 0px;
	background-color: #ededed;
	margin: calc(0% + 90px);
	margin-top: 40px;
	padding-top: 0px;
	margin-bottom: 0px">
		<h1>ALUMNOS</h1>
	<div class="" style="width: 80%;
	background: white;
	margin: 50px auto;
	box-shadow: 0 0 20px #333;

	display: grid;
	grid-template-columns: repeat(6, 1fr);
	grid-auto-flow: 50px;">
	<div class = "" style="grid-column-start: 1;
	grid-column-end: 7;

	background: rgba(40, 65, 120, 1.0);
	color: white;
	display: felx;
	justify-content: center;
	align-items: center;
	font-weight: bold;
	text-align: center;
	font-size: 1.9em;"> Datos de los alumnos</div>
	<div class = table__header>No Control</div>
	<div class = table__header>Nombre(s)</div>
	<div class = table__header>Apellido Paterno</div>
	<div class = table__header>Apellido Materno</div>
	<div class = table__header>Carrera</div>
	<div class = table__header>Estado de liberación</div>

	<?php
		$resultado = mysqli_query($conexion, $lista);
		while($row=mysqli_fetch_assoc($resultado)) { ?>
	<div class="table__item" style="font-size: 15px;"> <?php echo $row["noControl"];?></div>
	<div class="table__item" style="font-size: 15px;"> <?php echo $row["nombres"];?></div>
	<div class="table__item" style="font-size: 15px;"> <?php echo $row["apellidoPaterno"];?></div>
	<div class="table__item" style="font-size: 15px;"> <?php echo $row["apellidoMaterno"];?></div>
	<div class="table__item" style="font-size: 15px;"> <?php echo $row["idCarrera"];?></div>
	<div class="table__item" style="font-size: 15px;"> <?php echo $row["validar"];?></div>
	<?php } mysqli_free_result($resultado);?>
</div>
    </form>
</body>
</html>