<?php
include("header.php");
?>
<link rel="stylesheet" href="CSS/estilos.css">
    <link rel="stylesheet" href="CSS/styles.css">
    <link rel="stylesheet" href="CSS/scrollBar.css">
    <link rel="stylesheet" href="CSS/logeo.css">
		
<div id="container">
    <h1>&bull; Registro &bull;</h1>
    
    <form action="#" method="post" id="contact_form">
      
       
          
            <div class="telephone">
                    <label for="name"></label>
                    <input type="text" placeholder="Usuario" name="telephone" id="telephone_input" required>
                  </div>
                  <div class="telephone">
                        <label for="name"></label>
                        <input type="text" placeholder="Contraseña" name="telephone" id="telephone_input" required>
                      </div>
                      
                <div class="telephone">
                            <label for="name"></label>
                            <input type="text" placeholder="Confirmar Contraseña" name="telephone" id="telephone_input" required>
                          </div>
                          <div class="telephone">
                                <label for="name"></label>
                                <input type="text" placeholder="Correo" name="telephone" id="telephone_input" required>
                              </div>
          
     <div>
         <div class="submit">
             <input type="submit" value="Registrar" id="form_button" />
            </div>
            <div class="logeo">
                <button value="" id="form_button" onclick= "window.location.href = 'LobiLogeo.php';"  >YaTengoCuenta</button>
            </div>
        </div>
    </form><!-- // End form -->
  </div><!-- // End #container -->
  <?php
       include("footer.php");
       ?>