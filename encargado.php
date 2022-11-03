<?php
	include ("conexion.php");
	$Encargado = "SELECT * FROM Encargado";
	$query= "SELECT noAct, nombreAct FROM Actividad ORDER BY noAct ASC";
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
    	<input type="text" name="CURP" placeholder="CURP">
    	<input type="text" name="nombresEncarg" placeholder="Nombre(s)">
    	<input type="text" name="apellidoPaternoEncarg" placeholder="Apellido Paterno">
    	<input type="text" name="apellidoMaternoEncarg" placeholder="Apellido Meterno">
    	<input type="password" name="password" placeholder="Password">
    	<div style="width: calc(100% - 20px); padding: 9px;margin: auto;margin-top: 12px;font-size: 16px;"><h3>
    		Selecciona tu actividad encargada:
    		<select id="cbx_activ" name="cbx_activ">
    		<option value="0">Selecciona su actividad</option>
    		<?php 
    		WHILE ($row = $result1->fetch_assoc()){ ?>
    		<option value="<?php echo $row['noAct']; ?>"><?php echo $row['nombreAct']; ?></option>
    	<?php } ?>
    </h3>
    	</select>
    	</div>
    	<input type="submit" name="register">
    </form>
        <?php 
        include("nuevoEncargado.php");
        ?>
</body>
</html>