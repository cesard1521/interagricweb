<<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>registro clientes formulario</title>
	<link rel="stylesheet" href="estilos.css">
</head>
<body>
	<center>
	<form action="registro.php" method="POST">
		<br>
		<h1>registro cliente nuevo</h1>
		<br>

		 <input type="text" name="txtnombre_cliente" placeholder="Nombre "><br/><br/>
		<input type="text" name="txtapellidos_cliente" placeholder="Apellidos "><br/><br/>
		<input type="text" name="txtaño_nacimiento" placeholder=" Año de nacimiento"><br/><br/>
		<input type="text" name="txtdomicilio_cliente" placeholder="domicilio"><br/><br/>
		<input type="text" name="txtcorreo_electronico" placeholder="correo electronico"><br/><br/>
		<input type="text" name="txtusuario" placeholder="usuario"><br/><br/>
		
		<input type="password" name="txtcontraseña" placeholder="Contraseña "><br/><br/>
		

		<input type="submit" value="registrar" name="btnRegistrar">
	</form>
	</center>
</body>
</html>