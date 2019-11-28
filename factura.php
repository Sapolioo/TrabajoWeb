<?php
$mysqli = new mysqli(
    'localhost',
    'root',
    '',
    'infinity'
);
include("header.php");
if($mysqli->connect_error){
    
    die('Error en la conexion' . $mysqli->connect_error);	
}
$id=$_GET['ids'];
$precio=$_GET['precio'];
$id_usuario=$_SESSION['id_usuario'];
if($_SESSION['compra']== -1)
{   $query="INSERT INTO `factura_cabecera`      (`id_facturaCabecera`, `id_cliente`, `fecha_emision`, `total`) VALUES (NULL, '$id_usuario', current_timestamp(), '0')";
    $res=  $mysqli->query($query);
    $id_insert=$mysqli->insert_id;
    $_SESSION['compra']=$id_insert;
    echo "Entre";
}

    $id_insert=$_SESSION['compra'];
    $query="INSERT INTO `factura_detalle` (`id_factura_detalle`, `id_facturaCabacera`, `id_producto`, `cantidad`) VALUES (NULL, '$id_insert', '$id', '1')";
    $total=$precio;
    $res=mysqli_query($conn,$query);
    $query="UPDATE `factura_cabecera` SET `total` = total+$total WHERE `factura_cabecera`.`id_facturaCabecera` = $id_insert;";
    $res=mysqli_query($conn,$query);

    
   // header("Location: busqueda.php");
    





?>

<div class="container">
			<div class="row">
				<div class="row mx-auto btn btn-dark" style="text-align:center">
					<?php if($res) { ?>
						<h3>COMPRA EN EL CARRITO</h3>
						<?php } else { ?>
						<h3>ERROR AL COMPRAR</h3>
					<?php } ?>
					
					<a href="busqueda.php" class="btn btn-primary">BUSCAR</a>
                    <a href="dejardecomprar.php" class="btn btn-primary">PAGAR</a>
				</div>
			</div>
        </div>





<?php
       include("footer.php");
       ?>
