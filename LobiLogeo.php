<?php
include("header.php");

?>
<link rel="stylesheet" href="CSS/estilos.css">
    <link rel="stylesheet" href="CSS/styles.css">
    <link rel="stylesheet" href="CSS/logeo.css">
    <link rel="stylesheet" href="CSS/LobiLogeo2.css">
<div id="container">
    <h1>&bull; INICIO DE SECIÓN &bull;</h1>
    
    <form name="formulario" method="POST" action="usuario.php" class="mx-auto row px-md-5">
  <!-- Nombre de usuario.
       Campo obligatorio, entre 5-40 carácteres -->
  Usuario: <input type="box " name="nombre" placeholder="Usuario" minlength="1" maxlength="40" required>
  <!-- Contraseña.
       Campo obligatorio, mínimo 11 carácteres -->
  Password: <input type="password" name="pass" placeholder="Contraseña" required>
  
  
  
  
  
  
  
  
  <div class="row px-md-5"><input  type="submit" class="btn btn-link" name="submit" value="Entrar" id="form_button" ></div>
  <div class="row px-md-5"> <br> <a class="column px-md-5" href="nuevo_usuario.php">REGISTRAR!!!</a></div>

                    
     </form>
  </div><!-- // End #container -->
  <?php
       include("footer.php");
       ?>

