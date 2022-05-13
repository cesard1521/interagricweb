<?php
session_start();
/*error_reporting(0);*/
/*variable de sesion, aqui la guardamos para usarlas en cualquier momento*/
$varsesion = $_SESSION['usuario'];
/*acceso no autorizado*/
if($varsesion == null || $varsesion = '' ){
	echo'usted no tiene autorizacion';
	/*con die finalizamos el ciclo if, al encontrar los datos vacios, de esta manera ya no se ejecuta el codigo restante*/
	die();}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>home</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<h1>cliente: <?php echo $_SESSION['usuario'] ?></h1>
	<a href="../cerrarsesion.php">cerrar sesion</a>
</body>
</html>






<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>administrador</title>
	<link rel="stylesheet" href="estilos.css">
	<script src="https://code.jquery.com/jquery-"></script>
	<script src="http://code.jquery.com/jquery-latest.js"></script>
	<script src="main.js"></script>
</head>
<body bgcolor="#3498db">

	
	<header>
		<div class="contenedor">
		

		
		
		<nav class="menu">
			
			<ul>
				<li> <div class="logo">
			<img src="../imagenes/logo.jpg" style="width: 200px;height:80px ">

		</div></li>
				<li><a href="#">Inicio</a></li>
				<li><a href="#">Empresa</a></li>
				<li><a href="../productos/productosclient.php">Seccion de productos</a></li>
				<li><a href="#">Tienda</a></li>
				<li><a href="#">Cursos</a></li>
				<li><a href="#">Contacto</a></li>
				<li><a href="#"></a></li>
				

				
			</ul>

		</nav>
		
		</div>

		

		
		
		 
		</div>
	</header>