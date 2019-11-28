

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

if(isset($_POST['nombre']))
{   $nombre=$_POST['nombre'];
    $descripcion=$_POST['descripcion'];
    $j_online=$_POST['online'];
    $consola=$_POST['consola'];
    $control=$_POST['control'];
    $precio=$_POST['precio'];
    $genero=$_POST['genero'];
    $id=$_GET['id'];
    


    $query="UPDATE `juego` SET `nombre` = '$nombre', `precio` = '$precio', `descripcion` = '$descripcion',`j_online` = '$j_online', `consola` = '$consola', `control` = '$control', `genero` = '$genero' WHERE juego.id_juego = '$id'";

    
    $res=  $mysqli->query($query);
    $id_insert=$mysqli->insert_id;
    if($_FILES["archivo"]["error"]>0){
		#echo "Error al cargar archivo";	
		} else {
		
		$permitidos = array("image/gif","image/png","image/jpg","application/pdf");
		$limite_kb = 2000;
		
		
			
			$ruta = 'Juegos/'.$id_insert.'/';
			$archivo = $ruta.$_FILES["archivo"]["name"];
			
			if(!file_exists($ruta)){
				mkdir($ruta);
			}
			
			if(!file_exists($archivo)){
				
				$resultado = @move_uploaded_file($_FILES["archivo"]["tmp_name"], $archivo);
				
				if($resultado){
					#echo "Archivo Guardado";
					} else {
					#echo "Error al guardar archivo";
				}
				
				} else {
				#echo "Archivo ya existe";
			}
			
			
		
	}
    
    
    
    


}
    







?>

<div class="container">
			<div class="row">
				<div class="row mx-auto btn btn-dark" style="text-align:center">
					<?php if($res) { ?>
						<h3>REGISTRO GUARDADO</h3>
						<?php } else { ?>
						<h3>ERROR AL GUARDAR</h3>
					<?php } ?>
					
					<a href="busqueda.php" class="btn btn-primary">Regresar</a>
					
				</div>
			</div>
        </div>
        
        <?php
        include("footer.php");
?>