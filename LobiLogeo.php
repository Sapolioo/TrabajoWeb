<?php
include("header.php");

?>
<link rel="stylesheet" href="CSS/estilos.css">
    <link rel="stylesheet" href="CSS/styles.css">
    <link rel="stylesheet" href="CSS/logeo.css">
    <link rel="stylesheet" href="CSS/LobiLogeo2.css">
    
<div id="container" class="container">
     <h1><br>&bull;  INICIO DE SESIÓN &bull;</h1>
     <form name="formulario" method="POST" action="usuario.php" class="mx-auto row px-md-5">
          <div class="row">
          <?php 
            if (isset($_SESSION['message']))
            {

                ?>
               <div class="col">
               <div class="input-group mb-3">
                    

               <div class="alert alert-<?= $_SESSION['message_type'];?> alert-dismissible fade show" role="alert">
        <?= $_SESSION['message'] ?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        </div>

               </div>  
               </div>
               <div class="w-100"></div>
               <?php 
           session_unset(); }
        ?>



               <div class="col">
               <div class="input-group mb-3">
                    <input type="box" name="nombre" class="form-control" placeholder="Usuario" aria-label="Recipient's username" aria-describedby="button-addon2">
               </div>  
               </div>
               <div class="w-100"></div>
               <div class="col">
               <div class="input-group mb-3">
                    <input type="password" 
                    name="pass" class="form-control" placeholder="Contraseña" aria-label="Recipient's username" aria-describedby="button-addon2">
               </div>  
               </div>
               <div class="w-100"></div>
               <div class="col">
               <div class="input-group mb-3">
                    <input type="submit" class="btn btn-primary btn-lg btn-block" placeholder="Recipient's username" aria-label="Entrar" aria-describedby="button-addon2">
               </div>  
               </div>
               <div class="w-100"></div>
               <div class="col">
               <div class="input-group mb-3">
                    <a class=" btn btn-secondary btn-lg btn-block" href="nuevo_usuario.php">Registrate Ya!</a>
               </div>  
               </div>
          </div>
     </form>
</div>






  <?php
       include("footer.php");
       ?>



