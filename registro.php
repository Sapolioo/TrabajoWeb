<?php
include("conexion.php");
if(isset($_POST['usuario']))
{
$usuario = $_POST['usuario'];
$pass = $_POST['pass'];
$ci = $_POST['ci'];
$nombre = $_POST['nombre1'];
$nombre2 = $_POST['nombre2'];
$ap_pat = $_POST['ap_pat'];
$ap_mat = $_POST['ap_mat'];
#echo $usuario,$pass,$ci,$nombre,$nombre2,$ap_mat,$ap_pat;
$query = "SELECT cuentas.usuario AS 'nonre' FROM cuentas WHERE cuentas.usuario = '$usuario' ";
$res = mysqli_query($conn,$query);
$row = mysqli_fetch_array($res);
$us=$row['nonre'];

#Aqui veo si existe algun usuario registrado con el nuevo usuario
#si existiera le mando una alerta
 if($us == $usuario)
 {
   $_SESSION['usuario'] = $usuario; 
   $_SESSION['message'] = "El Usuario '$usuario' ya se encuentra registrado, intente uno diferente";
   $_SESSION['message_type'] = "danger";
   header ('Location: nuevo_usuario.php') ;
 }
 else #si no existe verifico si existe el cliente en la base de datos para no repetirlo
 {
   $query="SELECT cliente.id_cliente AS 'id' FROM cliente WHERE cliente.nombre = '$nombre' AND cliente.segundoNombre = '$nombre2'
   AND cliente.ap_paterno = '$ap_pat' AND cliente.ap_materno = '$ap_mat'";
   $res = mysqli_query($conn,$query);
      if(mysqli_num_rows($res)!=0)
   {  #tambien mando una alerta
      $_SESSION['nombre1'] = $nombre.$nombre2.$ap_pat.$ap_mat; 
      $_SESSION['message'] = "El Cliente '$nombre $nombre2 $ap_pat $ap_mat' ya tiene una cuenta de usuario, intente uno diferente o contacte a un Administrador";
      $_SESSION['message_type'] = "danger";
      header ('Location: nuevo_usuario.php') ;
   }
   else#si no existiera nada igual, puedo hacer un nuevo registo
   {
      $query="INSERT INTO `cuentas` (`id_usuario`, `usuario`, `contraseña`, `tipo`) VALUES (NULL, '$usuario', '$pass', '1')";
      $res = mysqli_query($conn,$query);

      #el primer registro creado es en la tabla cuentas, luego en la de clientes
      #pero necesito el id con el que se creo este nuevo registro para casasr los registros
      $query="SELECT cuentas.id_usuario AS 'id' FROM cuentas WHERE cuentas.usuario = '$usuario' AND cuentas.contraseña = '$pass'";
      $res=mysqli_query($conn,$query);
      $row = mysqli_fetch_array($res);
      $id=$row['id'];
      $query= "INSERT INTO `cliente` (`id_cliente`, `nombre`, `segundoNombre`, `ap_paterno`, `ap_materno`, `ci`, `id_cuenta`) VALUES (NULL, '$nombre', '$nombre2', '$ap_pat', '$ap_mat', '$ci', '$id')";
      $res=mysqli_query($conn,$query);
      if(isset($res))
      {
         header ('Location: LobiLogeo.php') ;
      }
   
   }  


 }
}
else
{
  echo "no me llego naranjas;"  ;
}





?>