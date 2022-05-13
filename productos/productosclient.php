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
					<th colspan="5"><a >nuestros productos</a></th>
				</tr>
				<tr>
					
					<th>descripcion del producto</th>
					<th colspan="2">productos</th>
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
					
					<td><?php echo $row['nombre'];?></td>
					<td><img height="130px" src="data:image/jpg;base64,<?php echo base64_encode($row['imagen']);?>"/></td>
					
				</tr>
				<?php
			}
			?>
			</tbody>

		</table>

	</center>
	
</body>
</html>




<?php
/*<?php echo $row['id'];?>*/
?>