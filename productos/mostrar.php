<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>mostrar informacion de productos</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<center>
		<table border="1">
			<thead>
				<tr>
					<th colspan="5"><a href="operador.php">ingresar nuevo producto</a></th>
				</tr>
				<tr>
					<th>identificador del producto</th>
					<th>descripcion del producto</th>
					<th colspan="4">operaciones</th>
				</tr>
				

			</thead>
			<tbody>
				<?php
				include("conexion.php");
				$query="SELECT * FROM tabla_imagen";
				$resultado = $conexion->query($query);
				while ($row=$resultado->fetch_assoc()) {


				?>
				<tr>
					<td><?php echo $row['id'];?></td>
					<td><?php echo $row['nombre'];?></td>
					<td><img height="130px" src="data:image/jpg;base64,<?php echo base64_encode($row['imagen']);?>"/></td>
					<td><a href="modificar.php?id=<?php echo $row['id'];?>">modificar producto</a></td>
					<td><a href="eliminar.php?id=<?php echo $row['id'];?>">eliminar producto</a></td>
					<td><a href="productosclient.php">vista cliente</a></td>
				</tr>
				<?php
			}
			?>
			</tbody>

		</table>

	</center>
	
</body>
</html>