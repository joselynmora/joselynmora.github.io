<?php
    $servidor = "localhost";
    $nombreusuario = "root";
    $password = "";
    $db = "proyecto_bd";

    $conexion = new mysqli($servidor, $nombreusuario, $password, $db);

    if($conexion->connect_error){
        die("Conexión fallida: " . $conexion->connect_error);
    }

    /*
    $sql = "CREATE DATABASE proyecto_bd";
    if($conexion->query($sql) === true){
        echo "Base de datos creada correctamente.";
    }else{
        die("Error al crear la base de datos: " . $conexion->error);
    }*/
    
/*
    $sql7 = "CREATE TABLE Carrera(
        idCarrera CHAR (10) PRIMARY KEY,
		nombreCarrera VARCHAR (20) NOT NULL
    )";

    $sql = "CREATE TABLE Alumno(
        noControl CHAR (10) PRIMARY KEY,
		nombres VARCHAR (100) NOT NULL,
		apellidoPaterno VARCHAR (100) NOT NULL,
		apellidoMaterno VARCHAR (100) NULL,
		telefono CHAR (15) NULL,
		correoInstitucional VARCHAR (50) NULL,
		password VARCHAR (100) NOT NULL,
		validar CHAR (20) NULL,
    	idCarrera CHAR (10)
    )";

    $sql2 = "CREATE TABLE Actividad(
        noAct INT(200) NOT NULL AUTO_INCREMENT,
		nombreAct VARCHAR (100) NOT NULL,
		descripcion TEXT (4096) NOT NULL,
		cupo CHAR (20) NULL,
		horarios VARCHAR (20) NULL,
		fechaInicio VARCHAR (100) NOT NULL,
		fechaTermina VARCHAR (100) NOT NULL,
		horasTotales VARCHAR (10) NOT NULL,
		carreraDirigida VARCHAR (100) NULL,
		tipoAct CHAR (20) NULL,
		creditosDisponibles CHAR (10) NOT NULL,
		PRIMARY KEY (noAct)
    )";

    $sql3 = "CREATE TABLE Departametno(
        noDepto CHAR (10) PRIMARY KEY,
		nombreDepto VARCHAR (100) NOT NULL,
		edificio CHAR (3) NOT NULL,
		area VARCHAR (20) NOT NULL
    )";

    $sql5 = "CREATE TABLE Jefe_Depto_Academico(
        RFC CHAR (20) PRIMARY KEY,
		nombresJefe VARCHAR (100) NOT NULL,
		apellidoPaternoJefe VARCHAR (100) NOT NULL,
		apellidoMaternoJefe VARCHAR (100) NULL,
		password VARCHAR (100) NOT NULL,
		noDepto CHAR (10) NOT NULL
    )";

    $sql6 = "CREATE TABLE Encargado(
        CURP CHAR (30) PRIMARY KEY,
		nombresEncarg VARCHAR (100) NOT NULL,
		apellidoPaternoEncarg VARCHAR (100) NOT NULL,
		apellidoMaternoEncarg VARCHAR (100) NULL,
		password VARCHAR (100) NOT NULL,
		noAct INT(200) NOT NULL
    )";

    $sql4 = "CREATE TABLE AlumnoXActividad(
        credsObtenidos CHAR (10) NOT NULL,
		periodo VARCHAR (20) NOT NULL,
		nivelDesempenio VARCHAR (3) NULL,
		noControl VARCHAR (10)  NOT NULL,
		noAct INT(200) NOT NULL,
		RFC VARCHAR (20) NULL,
		CURP CHAR (30) NULL
    )";

    if($conexion->query($sql) & $conexion->query($sql2) & $conexion->query($sql3) & $conexion->query($sql4) & $conexion->query($sql5) & $conexion->query($sql6) & $conexion->query($sql7)  == true){
        echo "Las tablas se crearon correctamente.";
    }else{
        die("Error al crear tabla: " . $conexion->error);
    }

    $sql11 = "ALTER TABLE `alumno` ADD FOREIGN KEY (`idCarrera`) REFERENCES `carrera`(`idCarrera`)";
    $sql22 = "ALTER TABLE `alumnoxactividad` ADD FOREIGN KEY (`CURP`) REFERENCES `encargado`(`CURP`)";
    $sql33 = "ALTER TABLE `alumnoxactividad` ADD FOREIGN KEY (`noControl`) REFERENCES `alumno`(`noControl`)";
    $sql44 = "ALTER TABLE `alumnoxactividad` ADD FOREIGN KEY (`RFC`) REFERENCES `jefe_depto_academico`(`RFC`)";
    $sql55 = "ALTER TABLE `jefe_depto_academico` ADD FOREIGN KEY (`noDepto`) REFERENCES `departametno`(`noDepto`)";
    $sql66 = "ALTER TABLE `encargado` ADD FOREIGN KEY (`noAct`) REFERENCES `actividad`(`noAct`)";
    $sql77 = "ALTER TABLE `alumnoxactividad` ADD FOREIGN KEY (`noAct`) REFERENCES `actividad`(`noAct`)";
	
    	$resultado = mysqli_query($conexion,$sql11);
	    $resultado2 = mysqli_query($conexion,$sql22);
	    $resultado3 = mysqli_query($conexion,$sql33);
	    $resultado4 = mysqli_query($conexion,$sql44);
	    $resultado5 = mysqli_query($conexion,$sql55);
	    $resultado6 = mysqli_query($conexion,$sql66);
	    $resultado7 = mysqli_query($conexion,$sql77);

	if ($resultado && $resultado2 && $resultado3 && $resultado4 && $resultado5 && $resultado6 && $resultado7) {
	    	?> 
	    	<h3 class="ok">¡Llaves creadas con éxito!</h3>
           <?php
	    } else{
	    	?> 
	    	<h3 class="bad">¡Ups ha ocurrido un error en las llaves!</h3>
           <?php
	    }


    	$consulta = "INSERT INTO Departametno(noDepto, nombreDepto, edificio, area) VALUES ('1D', 'Control Escolar','F','General')";
	    $consulta2 = "INSERT INTO Departametno(noDepto, nombreDepto, edificio, area) VALUES ('2D', 'Desarrollo Académico','V','General')";
	    $consulta3 = "INSERT INTO Departametno(noDepto, nombreDepto, edificio, area) VALUES ('3D', 'Tecnológías','V','Sistemas, TICS')";
	    $consulta4 = "INSERT INTO Departametno(noDepto, nombreDepto, edificio, area) VALUES ('4D', 'Ambiental','C','Biología')";
	    $consulta5 = "INSERT INTO Departametno(noDepto, nombreDepto, edificio, area) VALUES ('5D', 'Administración','U','Administración')";
	    $consulta6 = "INSERT INTO Departametno(noDepto, nombreDepto, edificio, area) VALUES ('6D', 'Electrica','M','Electricidad')";
	    $consulta7 = "INSERT INTO Departametno(noDepto, nombreDepto, edificio, area) VALUES ('7D', 'Contaduría','M','Contaduría')";
	    $consulta8 = "INSERT INTO Departametno(noDepto, nombreDepto, edificio, area) VALUES ('8D', 'Arquitectura','B','Arquitectura, Civil')";

	    $resultado = mysqli_query($conexion,$consulta);
	    $resultado2 = mysqli_query($conexion,$consulta2);
	    $resultado3 = mysqli_query($conexion,$consulta3);
	    $resultado4 = mysqli_query($conexion,$consulta4);
	    $resultado5 = mysqli_query($conexion,$consulta5);
	    $resultado6 = mysqli_query($conexion,$consulta6);
	    $resultado7 = mysqli_query($conexion,$consulta7);
	    $resultado8 = mysqli_query($conexion,$consulta8);


	    if ($resultado && $resultado2 && $resultado3 && $resultado4 && $resultado5 && $resultado6 && $resultado7 && $resultado8) {
	    	?> 
	    	<h3 class="ok">¡Datos llenados con éxito!</h3>
           <?php
	    } else{
	    	?> 
	    	<h3 class="bad">¡Ups ha ocurrido un error en el llenado de datos!</h3>
           <?php
	    }
		
 	    $consulta = "INSERT INTO Carrera(idCarrera, nombreCarrera) VALUES ('ARQU', 'Arquitectura')";
	    $consulta2 = "INSERT INTO Carrera(idCarrera, nombreCarrera) VALUES ('COPU', 'Contador Público')";
	    $consulta3 = "INSERT INTO Carrera(idCarrera, nombreCarrera) VALUES ('IADM', 'Ing. Administración')";
	    $consulta4 = "INSERT INTO Carrera(idCarrera, nombreCarrera) VALUES ('ICIV', 'Ing. Civil')";
	    $consulta5 = "INSERT INTO Carrera(idCarrera, nombreCarrera) VALUES ('IELE', 'Ing. Eléctrica')";
	    $consulta6 = "INSERT INTO Carrera(idCarrera, nombreCarrera) VALUES ('IGEM', 'Ing. Gestión Empresarial')";
	    $consulta7 = "INSERT INTO Carrera(idCarrera, nombreCarrera) VALUES ('ISIC', 'Ing. Sistemas Computacionales')";
	    $consulta8 = "INSERT INTO Carrera(idCarrera, nombreCarrera) VALUES ('ITIC', 'Ing. Tecnologías de la Información y Comunicación')";
	    $consulta8 = "INSERT INTO Carrera(idCarrera, nombreCarrera) VALUES ('LADM', 'Lic. Administración')";
	    $consulta8 = "INSERT INTO Carrera(idCarrera, nombreCarrera) VALUES ('LBIO', 'Lic. Biología')";


	    $resultado = mysqli_query($conexion,$consulta);
	    $resultado2 = mysqli_query($conexion,$consulta2);
	    $resultado3 = mysqli_query($conexion,$consulta3);
	    $resultado4 = mysqli_query($conexion,$consulta4);
	    $resultado5 = mysqli_query($conexion,$consulta5);
	    $resultado6 = mysqli_query($conexion,$consulta6);
	    $resultado7 = mysqli_query($conexion,$consulta7);
	    $resultado8 = mysqli_query($conexion,$consulta8);

	    if ($resultado && $resultado2 && $resultado3 && $resultado4 && $resultado5 && $resultado6 && $resultado7 && $resultado8) {
	    	?> 
	    	<h3 class="ok">¡Datos llenados con éxito!</h3>
           <?php
	    } else{
	    	?> 
	    	<h3 class="bad">¡Ups ha ocurrido un error!</h3>
           <?php
	    }
?>
*/