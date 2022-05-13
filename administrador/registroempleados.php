<<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>formulario registro empleados</title>
	<link rel="stylesheet" href="estilos.css">
</head>
<body>
	<center>
	<form action="registro.php" method="POST">
		<br>
		<h1>registro empleados</h1>
		<br>

		 <input type="text" name="txtnombre_empleado" placeholder="Nombre empleado"><br/><br/>
		<input type="text" name="txtapellido_paterno" placeholder="Apellido paterno "><br/><br/>
		<input type="text" name="txtapellido_materno" placeholder=" Apellido materno"><br/><br/>
		<input type="text" name="txtedad_empleado" placeholder="Edad empleado"><br/><br/>
		<input type="text" name="txtfecha_ingreso" placeholder="Fecha ingreso"><br/><br/>
		<input type="text" name="txtdomicilio_empleado" placeholder="Domicilio empleado"><br/><br/>
		<input type="text" name="txtcorreo_empleado" placeholder="Correo empleado"><br/><br/>
		<input type="text" name="txttelefono_empleado" placeholder="Telefono empleado"><br/><br/>
		<input type="password" name="txtcontraseña" placeholder="Contraseña "><br/><br/>
		<input type="text" name="txtusuario" placeholder="usuario "><br/><br/>

		<input type="submit" value="registrar" name="btnRegistrar">
	</form>
	</center>
</body>
</html>