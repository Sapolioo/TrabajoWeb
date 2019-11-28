<?php
include("conexion.php");

$query="SELECT imagen AS 'imagen' FROM `juego` WHERE id_juego = 5";
$res=mysqli_query($conn,$query);
$row = mysqli_fetch_array($res);
$img = $row['imagen'];


 
	
	
	$datos = $res->fetch(PDO::FETCH_ASSOC)["imagen"]; // Se recuperan los resultados.
	$res->closeCursor(); // Se libera el recurso.
 
	$datos = base64_decode($datos);
	echo $datos;


?>


