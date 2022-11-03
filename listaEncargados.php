<?php
	include ("conexion.php");
	$lista= "SELECT * FROM Encargado";
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
		<h1>ENCARGADOS</h1>
		<div class="container-table3">
	<div class = table__title3> Datos de encargados</div>
	<div class = table__header>CURP</div>
	<div class = table__header>Nombre(s)</div>
	<div class = table__header>Apellido Paterno</div>
	<div class = table__header>Apellido Materno</div>
	<div class = table__header>Clave de actividades asignadas</div>

	<?php
		$resultado = mysqli_query($conexion, $lista);
		while($row=mysqli_fetch_assoc($resultado)) { ?>
	<div class="table__item" style="font-size: 15px;"> <?php echo $row["CURP"];?></div>
	<div class="table__item" style="font-size: 15px"> <?php echo $row["nombresEncarg"];?></div>
	<div class="table__item" style="font-size: 15px"> <?php echo $row["apellidoPaternoEncarg"];?></div>
	<div class="table__item" style="font-size: 15px"> <?php echo $row["apellidoMaternoEncarg"];?></div>
	<div class="table__item" style="font-size: 15px"> <?php echo $row["noAct"];?></div>
	<?php } mysqli_free_result($resultado);?>
</div>
    </form>
</body>
</html>