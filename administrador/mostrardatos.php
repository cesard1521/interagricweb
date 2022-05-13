<?php 
$conexion=mysqli_connect('localhost','root','','interagricbd');
/*<td><?php echo $mostrar['contraseña_empleado']?></td>*/
 ?>






<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>mostrar datos registro empleados</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<br>
	<center>
	<h1>informacion de empleados</h1>
	</center>
	<table border="1">
		<tr>
			<td>id empleado</td>
			<td>nombre empleado</td>
			<td>apellido paterno</td>
			<td>apellido materno</td>
			<td>edad empleado</td>
			<td>fecha ingreso</td>
			<td>domicilio empleado</td>
			<td>correo empleado</td>
			<td>telefono empleado</td>
			<td>contraseña empleado</td>
		</tr>
		<?php
		$sql="SELECT* from registro_empleados";
		$result = mysqli_query($conexion,$sql);

		while ($mostrar=mysqli_fetch_array($result)) {
			
		

		?>
		<tr>
			<td><?php echo $mostrar['id_empleado']?></td>
			<td><?php echo $mostrar['nombre_empleado']?></td>
			<td><?php echo $mostrar['apellido_paterno']?></td>
			<td><?php echo $mostrar['apellido_materno']?></td>
			<td><?php echo $mostrar['edad_empleado']?></td>
			<td><?php echo $mostrar['fecha_ingreso']?></td>
			<td><?php echo $mostrar['domicilio_empleado']?></td>
			<td><?php echo $mostrar['correo_empleado']?></td>
			<td><?php echo $mostrar['telefono_empleado']?></td>
			
		</tr>
		<?php
	}

		?>
	</table>
	
</body>
</html>

