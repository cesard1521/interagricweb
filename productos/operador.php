<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>index de productos con imagen</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<center><br><br>
		<form action="proceso_guardar.php" method="POST" enctype="multipart/form-data">
			<input type="text" required name="nombre" placeholder="descripcion del producto" value=""/><br><br>
			<input type="file" required name="imagen"/><br><br>
			<input type="submit" value="cargar imagen para el producto">


		</form>

	</center>
	
</body>
</html>