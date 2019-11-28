<?php
include("header.php");
$queryConsolas="SELECT nombre AS 'nombre', id_consola AS 'id_consolas'  FROM consola";
$queryControles="SELECT nombre AS 'nombre', id_control AS 'id_control'  FROM control";
$queryGenero="SELECT nombre AS 'nombre', id_genero AS 'id_genero'  FROM genero";
$res_Consola = mysqli_query($conn , $queryConsolas);
$res_Controles = mysqli_query($conn , $queryControles);
$res_Genero = mysqli_query($conn , $queryGenero);
$id=$_GET['id'];
$query="SELECT 
juego.nombre AS 'nombre',
juego.precio AS 'precio',
juego.descripcion As 'des'
FROM juego 
WHERE juego.id_juego='$id'";
$res=mysqli_query($conn,$query);
$row = mysqli_fetch_array($res);
$nombre=$row['nombre'];
$precio=$row['precio'];
$des=$row['des'];

?>





<div id="sectionM">
<form class="bg-secondary" action="editar_registro.php?id=<?php echo $id?>" method="POST" enctype='multipart/form-data' autocomplete="off">
  <div class="form-group row">
        <label for="inputEmail3" class="col-sm-2 col-form-label">Juego</label>
    <div class="col-sm-10">
      <input name="nombre"type="text" class="form-control" id="inputEmail3" placeholder="Juego" value=" <?php echo $nombre ?>">
    </div>
  </div>
  
<!-- DESCRIPCION DEL JUEGO-->
  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Descripcion</label>
    <div class="col-sm-10">
      <input type="text" value=" <?php echo $des ?>" name="descripcion" class="form-control" id="inputPassword3" placeholder="Descripcion">
    </div>
  </div>


<!-- Precio DEL JUEGO-->
<div class="form-group row">
<label for="inputEmail3" class="col-sm-2 col-form-label">Precio</label>
<div class="col-sm-10">
<input type="text" value=" <?php echo $precio ?>" class="form-control" name="precio" id="inputEmail3" placeholder="Precio">
</div>
</div>
  
  <fieldset class="form-group">
    <div class="row">
      <legend class="col-form-label col-sm-2 pt-0">Consola</legend>
      <div class="col-sm-10">
    
      <!--Aqui empieza la consulta de consolas-->
      
      <select name="consola">
      <?php 
        while($row = mysqli_fetch_array($res_Consola)){
            $i =  $row['nombre']; 
            $j =  $row['id_consolas'];?>
        <div class="form-check">
          
        <option value="<?php echo $j;?>"><?php echo $i;?></option>
        
        </div>
            <?php
            }
            ?>
            </select>
        </div>
        </div>
      <!--Aqui empieza la consulta de controles-->
 
      <div class="row">
      <legend class="col-form-label col-sm-2 pt-0">Control</legend>
      <div class="col-sm-10">
      <select name="control">
    <?php 
        while($row = mysqli_fetch_array($res_Controles)){
            $i =  $row['nombre']; 
            $j =  $row['id_control'];?>
        <div class="form-check">
          
          <option value="<?php echo $j;?>"><?php echo $i;?></option>
          
          </div>
        </div>
            <?php
            }
            ?></select>
            
</div></div>
      <!--Aqui empieza la consulta de generos-->
      <div class="row">
      <legend class="col-form-label col-sm-2 pt-0">Genero</legend>
      <div class="col-sm-10">
      <select name="genero">
    <?php 
        while($row = mysqli_fetch_array($res_Genero)){
            $i =  $row['nombre']; 
            $j =  $row['id_genero'];?>
        <div class="form-check">
          
          <option value="<?php echo $j;?>"><?php echo $i;?></option>
          
          </div>
            <?php
            }
            ?>
        </select >
      </div>
    </div>
  </fieldset>
  <div class="form-group row">
    <div class="col-sm-2">Multijugador</div>
    <div class="col-sm-10">
      <div class="form-check">
          <select name="online" id="online" >
              <option value="1">OnLine</option>
              <option value="2">OfLine</option>
          </select>
      </div>
    </div>
  </div>

    <div class="form-group row">
    <div class="col-sm-10">
    <input type="file" class="btn btn-dark" id="archivo" name="archivo">
    </div>
  </div>
  

  <div class="form-group row mx-auto">
    <div class="col-sm-10 ">
      <button type="submit"  class="btn btn-primary ">Guardar</button>
    </div>
  </div>
</form>
</div>
<?php
include("footer.php");
?>

