<?php
	include ("conexion.php");
	$alumnos = "SELECT * FROM Alumno";
	$query= "SELECT idCarrera FROM Carrera ORDER BY idCarrera ASC";
	$result1= $conexion->query($query);
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
    	<h1>Registra tus datos</h1>
    	<input type="text" name="noControl" placeholder="No Control">
    	<input type="text" name="nombres" placeholder="Nombre(s)">
    	<input type="text" name="apePaterno" placeholder="Apellido Paterno">
    	<input type="text" name="apeMaterno" placeholder="Apellido Meterno">
    	<input type="text" name="telefono" placeholder="Telefono">
    	<input type="Email" name="correo" placeholder="Correo Institucional">
    	<input type="password" name="password" placeholder="Password">
    	<div style="width: calc(100% - 20px); padding: 9px;margin: auto;margin-top: 12px;font-size: 16px;"><h3>
    		Selecciona tu carrera:
    		<select id="cbx_carrera" name="cbx_carrera">
    		<option value="0">Selecciona tu carrera</option>
    		<?php 
    		WHILE ($row = $result1->fetch_assoc()){ ?>
    		<option value="<?php echo $row['idCarrera']; ?>"><?php echo $row['idCarrera']; ?></option>
    	<?php } ?>
    </h3>
    	</select>
    	</div>
    	<input type="submit" name="register">
    </form>
        <?php 
        include("registrar.php");
        ?>
</body>
</html>