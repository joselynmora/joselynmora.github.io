<?php
	include ("conexion.php");
	$Jefe_Depto_Academico = "SELECT * FROM Jefe_Depto_Academico";
	$query= "SELECT noDepto, nombreDepto FROM Departametno ORDER BY noDepto ASC";
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
    	<input type="text" name="RFC" placeholder="RFC">
    	<input type="text" name="nombresJefe" placeholder="Nombre(s)">
    	<input type="text" name="apellidoPaternoJefe" placeholder="Apellido Paterno">
    	<input type="text" name="apellidoMaternoJefe" placeholder="Apellido Meterno">
    	<input type="password" name="password" placeholder="Password">
    	<div style="width: calc(100% - 20px); padding: 9px;margin: auto;margin-top: 12px;font-size: 16px;"><h3>
    		Selecciona su departamento:
    		<select id="cbx_depto" name="cbx_depto">
    		<option value="0">Selecciona su departamento</option>
    		<?php 
    		WHILE ($row = $result1->fetch_assoc()){ ?>
    		<option value="<?php echo $row['noDepto']; ?>"><?php echo $row['nombreDepto']; ?></option>
    	<?php } ?>
    </h3>
    	</select>
    	</div>
    	<input type="submit" name="register">
    </form>
        <?php 
        include("nuevoJefe.php");
        ?>
</body>
</html>