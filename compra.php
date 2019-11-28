<?php
include("header.php");
$id=$idd=$_GET['id'];
$query="SELECT * FROM `juego` JOIN consola JOIN control JOIN genero ON juego.consola=consola.id_consola AND juego.control=control.id_control AND juego.genero=genero.id_genero WHERE `id_juego`= $id";
$res=mysqli_query($conn,$query);
$row = mysqli_fetch_array($res);
$id = $row['id_juego'];
$nombre = $row['1'];
$precio = $row['precio'];
$des = $row['descripcion'];
$j = $row['j_online'];
$consola = $row['9'];
$control = $row['11'];
$genero = $row['13'];





?>
<link rel="stylesheet" href="CSS/estilos.css">
    <link rel="stylesheet" href="CSS/styles.css">
    <link rel="stylesheet" href="CSS/logeo.css">
    <link rel="stylesheet" href="CSS/LobiLogeo2.css">
    
<div id="container" class="container">
     <h1><br>&bull;COMPRA&bull;</h1>
     <form name="formulario" method="POST" action="factura.php" class="mx-auto row px-md-5">
     <div class="card mx-auto" style="width: 30rem;">
  <img src="imagenes/estrella.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title"> <?php echo $nombre ?> </h5>
    <p class="card-text"> <?php echo $des ?> </p>
    <div class="container">
        
        <div class="row mx-auto">
            <div class="col mx-auto">
                <?php echo $consola ?>
            </div>
            <div class="col mx-auto">
                <?php echo $control ?>
            </div>
            <div class="col mx-auto">
                <?php echo $genero , $id ?>

            </div>
        </div>
    </div>
    
    <a href="reservas.php?ids=<?php echo $idd ?>&nombre=<?php echo $nombre?>" class="btn btn-primary btn-lg btn-block">Reservas</a>
    <a href="factura.php?ids=<?php echo $idd ?>&precio=<?php echo $precio?>" class="btn btn-success btn-lg btn-block">COMPRAR</a>

  </div>
</div>

     </form>
</div>






  <?php
       include("footer.php");
       ?>



