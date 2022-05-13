
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>index de productos con imagen</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<?php
				include("conexion.php");
				$id = $_REQUEST['id'];
				$query="SELECT * FROM tabla_imagen WHERE id = '$id'";
			
				$resultado = $conexion->query($query);
				$row=$resultado->fetch_assoc();


				?>

	<center><br><br>
		<form action="proceso_modificar.php?id=<?php echo $row['id'] ?>" method="POST" enctype="multipart/form-data">
			<input type="text" required name="nombre" placeholder="nombre del producto" value="<?php echo $row['nombre']; ?>"/><br><br>
			<img height="130px" src="data:image/jpg;base64,<?php echo base64_encode($row['imagen']);?>"/><br><br>
			<input type="file" required name="imagen"/><br><br>
			<input type="submit" value="cargar imagen para el producto">


		</form>

	</center>
	
</body>
</html>