<?php
include("header.php");
include("buscarUsuario.php");
?>

<link rel="stylesheet" href="CSS/estilos.css">
    <link rel="stylesheet" href="CSS/styles.css">
    <link rel="stylesheet" href="CSS/logeo.css">
    <link rel="stylesheet" href="CSS/LobiLogeo2.css">
    
<div id="container" class="container">
     <h1><br>&bull; Editar Perfil &bull;</h1>
     <form name="formulario" method="POST" action="registro.php" class="mx-auto row px-md-5">
          <div class="row">
             

          <!-- Primer Nombre -->          
          <?php 
              

            if (isset($_SESSION['nombre1']))
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
                    <input type="box" name="nombre1" class="form-control"  aria-label="Recipient's username" aria-describedby="button-addon2" required value="<?php echo $_POST['nombre']?>">
               </div>  
               </div>
               <div class="w-100"></div>

          <!-- Segundo Nombre-->          
          <?php 
            if (isset($_SESSION['nombre2']))
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
                    <input type="box" name="nombre2" class="form-control" aria-label="Recipient's username" aria-describedby="button-addon2"value="<?php echo $_POST['segundoNombre']?>">
               </div>  
               </div>
               <div class="w-100"></div>


          <!-- Ap Paterno-->          
          <?php 
            if (isset($_SESSION['ap_pat']))
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
                    <input type="box" name="ap_pat" class="form-control" placeholder="Apellido Paterno" aria-label="Recipient's username" aria-describedby="button-addon2"required value="<?php echo $_POST['ap_paterno']?>">
               </div>  
               </div>
               <div class="w-100"></div>


          <!-- Apellido Materno-->          
          <?php 
            if (isset($_SESSION['ap_mat']))
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
                    <input type="box" name="ap_mat" class="form-control" placeholder="Apellido Materno" aria-label="Recipient's username" aria-describedby="button-addon2"required value="<?php echo $_POST['ap_materno']?>">
               </div>  
               </div>
               <div class="w-100"></div>


          <!-- Ci Nombre-->          
          <?php 
            if (isset($_SESSION['ci']))
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
                    <input type="box" name="ci" class="form-control" placeholder="CI" aria-label="Recipient's username" aria-describedby="button-addon2"required value="<?php echo $_POST['ci']?>">
               </div>  
               </div>
               <div class="w-100"></div>

 <!-- USUARIO-->          
 <?php 
            if (isset($_SESSION['usuario']))
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
                    <input type="text" name="usuario" class="form-control" placeholder="Usuario" title="Letras y números. Tamaño mínimo: 5. Tamaño máximo: 40" aria-label="Recipient's username" aria-describedby="button-addon2"minlength="5" maxlength="40" required pattern="[A-Za-z0-9]+" required value="<?php echo $_POST['usuario']?>">
               </div>  
               </div>
               <div class="w-100"></div>
 <!--PASS-->          
 <?php 
            if (isset($_SESSION['pass']))
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
                    <input type="password" name="pass" class="form-control" placeholder="Contraseña Anterior" aria-label="Recipient's username" aria-describedby="button-addon2" required>
               </div>  
               </div>
               <div class="w-100"></div>
 <!--PASS x2-->
               <div class="col">
               <div class="input-group mb-3">
                    <input type="password" name="pass" class="form-control" placeholder="Contraseña " aria-label="Recipient's username" aria-describedby="button-addon2" required>
               </div>  
               </div>
               <div class="w-100"></div>


               <div class="col">
               <div class="input-group mb-3">
                    <input type="submit" class="btn btn-success btn-lg btn-block" value="Registrar Cuenta" aria-label="Crear Cuenta" aria-describedby="button-addon2" name="registro">
               </div>  
               </div>
               <div class="w-100"></div>

               
              
          </div>
     </form>
</div>



<?php
include("footer.php");
?>
