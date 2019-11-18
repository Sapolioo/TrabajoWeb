<?php
    include('conexion.php');
      
    $nombre = $_POST ['nombre'];
    $pass = $_POST ['pass'];
    echo $nombre,$pass;
    $query = "SELECT *
FROM cuentas
WHERE usuario = '$nombre'
AND contraseña =  '$pass'";
$resultado = mysqli_query( $conn , $query );

if(mysqli_num_rows($resultado)==1)
    {
        $array = mysqli_fetch_array($resultado);
        $_SESSION['tipo']=$array['tipo'];
        $_SESSION['nombre']=$nombre;
    }


header ('Location: index.php') ;



?>