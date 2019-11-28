<?php

    $id_persona=$_SESSION['id_usuario'];
    $id_cuenta=$_SESSION['id_cuenta'];
    $tipo=$_SESSION['tipo'];
    
    $tipoCuenta="empleado";
    if($tipo=1)
    $tipoCuenta="cliente";
    $query="SELECT * FROM cuentas JOIN ".$tipoCuenta." ON cuentas.id_usuario = ".$tipoCuenta.".id_".$tipoCuenta." WHERE ".$tipoCuenta.".id_".$tipoCuenta." = ".$id_cuenta." AND cuentas.id_usuario = ".$id_persona." AND cuentas.tipo = ".$tipo;
    $res=mysqli_query($conn,$query);
    $array = mysqli_fetch_array($res);
    $_POST=$array;

    
?>