<?php
include("header.php");

?>
<link rel="stylesheet" href="CSS/estilos.css">
    <link rel="stylesheet" href="CSS/styles.css">
    <link rel="stylesheet" href="CSS/logeo.css">
    <link rel="stylesheet" href="CSS/LobiLogeo2.css">
<div id="container">
    <h1>&bull; INICIO DE SECIÓN &bull;</h1>
    
    <form name="formulario" method="POST" action="usuario.php" class="mx-auto">
  <!-- Nombre de usuario.
       Campo obligatorio, entre 5-40 carácteres -->
  Usuario: <input type="box " name="nombre" placeholder="Usuario"
                  minlength="1" maxlength="40" required>
  <!-- Contraseña.
       Campo obligatorio, mínimo 11 carácteres -->
  Password: <input type="password" name="pass" placeholder="Contraseña"
                   required>
            <input class="mx-auto"type="submit" name="submit" value="Entrar" id="form_button" />
</form>
  </div><!-- // End #container -->
  <?php
       include("footer.php");
       ?>

