<?php
include("conexion.php");
if(isset($_POST['registro']))
{
$usuario = $_POST['usuario'];
$pass = $_POST['pass'];
$ci = $_POST['ci'];
$nombre = $_POST['nombre'];
$nombre2 = $_POST['nombre2'];
$ap_pat = $_POST['ap_pat'];
$ap_mat = $_POST['ap_mat'];
$query = "SELECT cliente.nombre AS 'nonre' FROM cliente JOIN cuentas ON cliente.id_cuenta = cuentas.id_usuario WHERE cuentas.usuario = '$usuario' OR cuentas.contraseña = '$pass'";
$res = mysqli_query($conn,$query);
 if(isset($res))
 {
    header ('Location: nuevo_usuario.php') ;
 }


}
else
{
    
}





?>