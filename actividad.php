<?php
	include ("conexion.php");
	$Jefe_Depto = "SELECT * FROM Actividad";
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

	<form method="post">
    	<h1>Registra los datos de la Actividad</h1>
    	<input type="text" name="nombreAct" placeholder="Nombre de  la Actividad">
    	<input type="text" name="descripcion" placeholder="Descripcion">
    	<input type="text" name="cupo" placeholder="Cupo">
    	<input type="text" name="horarios" placeholder="Horarios">
    	<input type="text" name="fechaInicio" placeholder="Fecha de Inicio">
    	<input type="text" name="fechaTermina" placeholder="Fecha de Terminación">
    	<input type="text" name="horasTotales" placeholder="Horas Totales">
    	<input type="text" name="carreraDirigida" placeholder="Carrera a la que va Dirigida">
    	<input type="text" name="tipoAct" placeholder="Tipo de Actividad">
    	<input type="text" name="creditosDisponibles" placeholder="Creditos Asignados">

    	<input type="submit" name="register">
    </form>
        <?php 
        include("nuevaActividad.php");
        ?>
</body>
</html>