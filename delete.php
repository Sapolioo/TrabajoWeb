<?php
include("header.php");
$id=$_GET['id'];
$query="DELETE FROM `juego` WHERE `juego`.`id_juego` = $id ";
$res=mysqli_query($conn,$query);

header ('Location: busqueda.php') ;
?>