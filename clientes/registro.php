<<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>registro de clientes en base de datos</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<?php
	$server = "localhost";
	$usuario = "root";
	$contraseña = "";
	$bd = "interagricbd";

	$conexion = mysqli_connect($server, $usuario, $contraseña, $bd) or die("registro exitoso");


	$nombre_cliente = $_POST['txtnombre_cliente'];
	$apellidos_cliente = $_POST['txtapellidos_cliente'];
	$año_nacimiento = $_POST['txtaño_nacimiento'];
	$domicilio_cliente = $_POST['txtdomicilio_cliente'];
	
	
	$correo_electronico = $_POST['txtcorreo_electronico'];
	
	$usuario = $_POST['txtusuario'];
	$contraseña = $_POST['txtcontraseña'];

	$insertar = "INSERT into registro_cientes values ('intid_cliente','$nombre_cliente', '$apellidos_cliente','$año_nacimiento','$domicilio_cliente','$correo_electronico', '$usuario', '$contraseña' )";

	$resultado = mysqli_query($conexion, $insertar) or die("error al insertar los registros");

	mysqli_close($conexion);
	echo "datos insertados correctamente";


	?>
</body>
</html>