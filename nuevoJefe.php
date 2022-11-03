<?php 

$conexion = mysqli_connect("localhost","root","","proyecto_bd"); 


if (isset($_POST['register'])) {
    if (strlen($_POST['RFC']) >= 1 && strlen($_POST['nombresJefe']) >= 1
	&& strlen($_POST['apellidoPaternoJefe']) >= 1 && strlen($_POST['apellidoMaternoJefe']) >= 1 
	&& strlen($_POST['password']) >= 1) {

	    $RFC = trim($_POST['RFC']);
	    $nombresJefe = trim($_POST['nombresJefe']);
	    $apellidoPaternoJefe = trim($_POST['apellidoPaternoJefe']);
	    $apellidoMaternoJefe = trim($_POST['apellidoMaternoJefe']);
	    $password = trim($_POST['password']);
	   	$noDepto = $_POST['cbx_depto'];

	    $consulta = "INSERT INTO Jefe_Depto_Academico(RFC, nombresJefe, apellidoPaternoJefe, apellidoMaternoJefe, password, noDepto) VALUES ('$RFC','$nombresJefe','$apellidoPaternoJefe','$apellidoMaternoJefe','$password','$noDepto')";

	    $resultado = mysqli_query($conexion,$consulta);

	    if ($resultado) {
	    	?> 
	    	<h3 class="ok">¡Datos llenados con éxito, <a href="http://localhost/Proyecto_BD/setupJefe.php">inicie sesión!</a></h3>
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