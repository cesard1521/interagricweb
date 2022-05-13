<?php
$usuario=$_POST['usuario'];
$contraseña=$_POST['contraseña'];
session_start();
$_SESSION['usuario']=$usuario;

$conexion=mysqli_connect("localhost", "root","","interagricbd");

/*realizamos las respectivas consultas de los tres niveles*/
$consulta="SELECT*FROM registro_administrador where usuario='$usuario' and contraseña='$contraseña'";

$consulta2 = "SELECT*FROM registro_empleados where usuario ='$usuario' and contraseña='$contraseña'";
$consulta3 = "SELECT*FROM registro_cientes where usuario ='$usuario' and contraseña='$contraseña'";

/*comprobamos las variable*/
$resultado=mysqli_query($conexion,$consulta);

$filas=mysqli_num_rows($resultado);

$resultado2=mysqli_query($conexion,$consulta2);

$filas2=mysqli_num_rows($resultado2);

$resultado3=mysqli_query($conexion,$consulta3);

$filas3=mysqli_num_rows($resultado3);

//comprobamos la primer variable
if($filas){
	header ("location: administrador/admin.php");
}




/*comprobamos la segunda variable*/


elseif($filas2){
	header ("location: home2.php");
}




/*comprobamos la tercer variable*/


elseif($filas3){
	header ("location: clientes/cliente.php");
}



//informacion incorrecta

else{
	?>
	<?php
	include("index.php");
	?>
	<h1 class="bad">error en la autentificacion</h1>
	<?php
	mysqli_free_result($resultado3);
	mysqli_close($conexion);
}
