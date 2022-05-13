<<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>registro de empleados a base de datos</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<?php
	$server = "localhost";
	$usuario = "root";
	$contraseña = "";
	$bd = "interagricbd";

	$conexion = mysqli_connect($server, $usuario, $contraseña, $bd) or die("registro exitoso");


	$nombre_empleado = $_POST['txtnombre_empleado'];
	$apellido_paterno = $_POST['txtapellido_paterno'];
	$apellido_materno = $_POST['txtapellido_materno'];
	$edad_empleado = $_POST['txtedad_empleado'];
	$fecha_ingreso = $_POST['txtfecha_ingreso'];
	$domicilio_empleado = $_POST['txtdomicilio_empleado'];
	$correo_empleado = $_POST['txtcorreo_empleado'];
	$telefono_empleado = $_POST['txttelefono_empleado'];
	$contraseña = $_POST['txtcontraseña'];
	$usuario = $_POST['txtusuario'];

	$insertar = "INSERT into registro_empleados values ('intid_empleado','$nombre_empleado', '$apellido_paterno','$apellido_materno','$edad_empleado','$fecha_ingreso', '$domicilio_empleado', '$correo_empleado', '$telefono_empleado', '$contraseña','$usuario' )";

	$resultado = mysqli_query($conexion, $insertar) or die("error al insertar los registros");

	mysqli_close($conexion);
	echo "datos insertados correctamente";


	?>
</body>
</html>