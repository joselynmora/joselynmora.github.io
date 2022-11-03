<?php 

$conexion = mysqli_connect("localhost","root","","proyecto_bd"); 


if (isset($_POST['register'])) {
    if (strlen($_POST['CURP']) >= 1 && strlen($_POST['nombresEncarg']) >= 1
	&& strlen($_POST['apellidoPaternoEncarg']) >= 1 && strlen($_POST['apellidoMaternoEncarg']) >= 1 
	&& strlen($_POST['password']) >= 1) {

	    $CURP = trim($_POST['CURP']);
	    $nombresEncarg = trim($_POST['nombresEncarg']);
	    $apellidoPaternoEncarg = trim($_POST['apellidoPaternoEncarg']);
	    $apellidoMaternoEncarg = trim($_POST['apellidoMaternoEncarg']);
	    $password = trim($_POST['password']);
	    $noAct = $_POST['cbx_activ'];

	    $consulta = "INSERT INTO Encargado(CURP, nombresEncarg, apellidoPaternoEncarg, apellidoMaternoEncarg, password, noAct) VALUES ('$CURP','$nombresEncarg','$apellidoPaternoEncarg','$apellidoMaternoEncarg','$password','$noAct')";

	    $resultado = mysqli_query($conexion,$consulta);

	    if ($resultado) {
	    	?> 
	    	<h3 class="ok">¡Datos llenados con éxito, <a href="http://localhost/Proyecto_BD/setupEncargado.php">inicie sesión!</a></h3>
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