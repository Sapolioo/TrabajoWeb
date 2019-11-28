<?php
    include('conexion.php');
      
    $nombre = $_POST ['nombre'];
    $pass = $_POST ['pass'];
    $query = "SELECT cuentas.id_usuario AS 'id_usuario' , cuentas.tipo AS 'tipo'
    FROM cuentas
    WHERE cuentas.usuario = '$nombre'
    AND cuentas.contraseña =  '$pass'";
$resultado = mysqli_query( $conn , $query );

if(mysqli_num_rows($resultado)==1)
    {
        $array = mysqli_fetch_array($resultado);
        $id= $array['id_usuario'];
        $tipo= $array['tipo'];
        $_SESSION['id_cuenta']=$id;
        switch($tipo)
        {
            case 1:
                $query="SELECT cliente.nombre AS 'x', cliente.id_cliente AS'y'
                FROM cliente 
                WHERE cliente.id_cuenta = '$id'";
                
        break;
            case 2:
                $query="SELECT empleado.nombre AS 'x',empleado.id_empleado AS'y'
                FROM empleado 
                WHERE empleado.id_cuenta = '$id'";
            break;
            case 3:
                $query="SELECT empleado.nombre AS 'x',empleado.id_empleado AS'y'
                FROM empleado 
                WHERE empleado.id_cuenta = '$id'";
            
            break;
        }

        $resultado = mysqli_query( $conn , $query );
        $array = mysqli_fetch_array($resultado);
        $nombre=$array['x'];
        $id_usuario=$array['y'];
        $_SESSION['id_usuario']=$id_usuario;
        $_SESSION['tipo']=$tipo;
        $_SESSION['nombre']=$nombre;
        $_SESSION['compra']=-1;
       
 header ('Location: index.php') ;

    
    }
    else
    {
        $_SESSION['message'] = 'Usuario o Contraseña Incorrecta, prueba otra vez';
        $_SESSION['message_type'] = 'danger';
   header ('Location: LobiLogeo.php') ;

    }
    




?>