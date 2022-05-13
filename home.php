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
	<h1>admin: <?php echo $_SESSION['usuario'] ?></h1>
	<a href="cerrarsesion.php">cerrar sesion</a>
</body>
</html>