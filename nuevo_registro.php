<?php
include("conexion.php");
if(isset($_POST['nombre']))
{   $nombre=$_POST['nombre'];
    $descripcion=$_POST['descripcion'];
    $j_online=$_POST['online'];
    $consola=$_POST['consola'];
    $control=$_POST['control'];
    $precio=$_POST['precio'];
    $genero=$_POST['genero'];

    



    $query="INSERT INTO `juego` (`id_juego`, `nombre`, `precio`, `descripcion`, `j_online`, `consola`, `control`, `genero`) VALUES (NULL, '$nombre', '$precio', '$descripcion', '$j_online', '$consola', '$control', '$genero')";
    $res=mysqli_query($conn,$query);
    if(isset($res))
    {
        header ('Location: index.php') ;
    }


}
    






?>


