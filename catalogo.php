<?php
	include ("conexion.php");
	$catalogo= "SELECT * FROM Actividad";
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
    	<h1>ACTIVIDADES COMPLEMENTARIAS</h1>
    	<h4 style="text-align: justify;"> Son todas aquellas actividades que realiza el estudiante en beneficio de su formación integral con el objetivo de complementar su formación y desarrollo de competencias profesionales.

		Las actividades complementarias pueden ser: tutoría, actividades extraescolares, proyecto de investigación, proyecto integrador, participación en eventos académicos, productividad laboral, emprendedurismo, fomento a la lectura, construcción de prototipos y desarrollo tecnológico, conservación al medio ambiente, participación en ediciones, fomento a la cultura y/o aquellas que la institución considere. 
		</h4>
		<h1>ACTIVIDADES Y PROCEDIMIENTOS</h1>
		<a href="http://chetumal.tecnm.mx/images/2022/05MAYO/Actividades_complementarias.pdf">Lista de actividades complementarias.</a>
		<h1>ACTIVIDADES DISPONIBLES</h1>
		<div class="container-table2">
	<div class = table__title2> Actividades</div>
	<div class = table__header>Nombre de Actividad</div>
	<div class = table__header>Descripción</div>
	<div class = table__header>Disponibilidad</div>
	<div class = table__header>Horarios</div>
	<div class = table__header>Fecha de inicio</div>
	<div class = table__header>Fecha de terminación</div>
	<div class = table__header>Horas totales</div>
	<div class = table__header>Carrera Dirigida</div>
	<div class = table__header>Tipo de Actividad</div>
	<div class = table__header>Créditos Asignados</div> 

	<?php
		$resultado = mysqli_query($conexion, $catalogo);
		while($row=mysqli_fetch_assoc($resultado)) { ?>
	<div class="table__item" style="font-size: 15px;"> <?php echo $row["nombreAct"];?></div>
	<div class="table__item" style="font-size: 15px; text-align: left;;"> <?php echo $row["descripcion"];?></div>
	<div class="table__item" style="font-size: 15px"> <?php echo $row["cupo"];?></div>
	<div class="table__item" style="font-size: 15px"> <?php echo $row["horarios"];?></div>
	<div class="table__item" style="font-size: 15px"> <?php echo $row["fechaInicio"];?></div>
	<div class="table__item" style="font-size: 15px"> <?php echo $row["fechaTermina"];?></div>
	<div class="table__item" style="font-size: 15px"> <?php echo $row["horasTotales"];?></div>
	<div class="table__item" style="font-size: 15px"> <?php echo $row["carreraDirigida"];?></div>
	<div class="table__item" style="font-size: 15px"> <?php echo $row["tipoAct"];?></div>
	<div class="table__item" style="font-size: 15px"> <?php echo $row["creditosDisponibles"];?></div>

	<?php } mysqli_free_result($resultado);?>
</div>
    </form>
</body>
</html>