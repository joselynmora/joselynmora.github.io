<?php 

$conexion = mysqli_connect("localhost","root","","proyecto_bd"); 


if (isset($_POST['register'])) {
    if (strlen($_POST['noControl']) >= 1 && strlen($_POST['nombres']) >= 1
	&& strlen($_POST['apePaterno']) >= 1 && strlen($_POST['apeMaterno']) >= 1 
	&& strlen($_POST['telefono']) >= 1 && strlen($_POST['correo']) >= 1 
	&& strlen($_POST['password']) >= 1) {

	    $noControl = trim($_POST['noControl']);
	    $nombres = trim($_POST['nombres']);
	    $apePaterno = trim($_POST['apePaterno']);
	    $apeMaterno = trim($_POST['apeMaterno']);
	    $telefono = trim($_POST['telefono']);
	    $correo = trim($_POST['correo']);
	    $password = trim($_POST['password']);
	    $carrera = $_POST['cbx_carrera'];


	    $consulta = "INSERT INTO Alumno(noControl, nombres, apellidoPaterno, apellidoMaterno, telefono, correoInstitucional, password, idCarrera) VALUES ('$noControl','$nombres','$apePaterno','$apeMaterno','$telefono','$correo', '$password', '$carrera')";

	    $resultado = mysqli_query($conexion,$consulta);

	    if ($resultado) {
	    	?> 
	    	<h3 class="ok">¡Datos llenados con éxito, <a href="http://localhost/Proyecto_BD/setup.php">inicie sesión!</a></h3>
           <?php
	    } else {
	    	?> 
	    	<h3 class="bad">¡Ups ha ocurrido un error!</h3>
           <?php
	    }

    }else {
	    	?> 
	    	<h3 class="bad">¡Por favor complete los campos!</h3>
           <?php
    }
}

?>