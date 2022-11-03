<?php 

$conexion = mysqli_connect("localhost","root","","proyecto_bd"); 


if (isset($_POST['register'])) {
    if (strlen($_POST['nombreAct']) >= 1
	&& strlen($_POST['descripcion']) >= 1 && strlen($_POST['cupo']) >= 1 
	&& strlen($_POST['horarios']) >= 1 && strlen($_POST['fechaInicio']) >= 1 
	&& strlen($_POST['fechaTermina']) >= 1 && strlen($_POST['horasTotales']) >= 1
	&& strlen($_POST['carreraDirigida']) >= 1 && strlen($_POST['tipoAct']) >= 1 && strlen($_POST['creditosDisponibles']) >= 1) {

	    $nombreAct = trim($_POST['nombreAct']);
	    $descripcion = trim($_POST['descripcion']);
	    $cupo = trim($_POST['cupo']);
	    $horarios = trim($_POST['horarios']);
	    $fechaInicio = trim($_POST['fechaInicio']);
	    $fechaTermina = trim($_POST['fechaTermina']);
	    $horasTotales = trim($_POST['horasTotales']);
	    $carreraDirigida = trim($_POST['carreraDirigida']);
	    $tipoAct = trim($_POST['tipoAct']);
	    $creditosDisponibles = trim($_POST['creditosDisponibles']);

	    $consulta = "INSERT INTO Actividad(nombreAct, descripcion, cupo, horarios, fechaInicio, fechaTermina, horasTotales, carreraDirigida, tipoAct, creditosDisponibles) VALUES ('$nombreAct','$descripcion','$cupo','$horarios','$fechaInicio',
	     '$fechaTermina', '$horasTotales', '$carreraDirigida', '$tipoAct', '$creditosDisponibles')";

	    $resultado = mysqli_query($conexion,$consulta);

	    if ($resultado) {
	    	?> 
	    	<h3 class="ok">¡Datos llenados con éxito, actividad agregada!</h3>
           <?php
	    } else {
	    	?> 
	    	<h3 class="bad">¡Ups ha ocurrido un error!</h3>
           <?php
	    }

} else {
	    	?> 
	    	<h3 class="bad">¡Por favor complete los campos!</h3>
           <?php
    }
}

?>