<?php
include("conexion.php");
$id = $_REQUEST ['id'];


$query = "DELETE FROM tabla_imagen WHERE id= '$id'";


$resultado = $conexion ->query($query);

if($resultado){
	//echo"informacion eliminada correctamente";
	header ("Location: mostrar.php ");
		
	
	//echo"se cargo informacion correctamente";
}else{
	echo"no se elimino informacion";
}

?>