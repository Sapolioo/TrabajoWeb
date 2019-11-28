<?php
include("conexion.php");


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="CSS/estilos.css">
    <link rel="stylesheet" href="CSS/styles.css">
    <title>INFINITY</title>
   
</head>
<body>
       
    <header>
        <div id="logo">
            <a href="index.php"><img src="imagenes/icono.png" alt="imposible cargar"></a>
        </div>
        <div><h1>INFINITY </h1></div>
        <div id="icono1" class="redes"> <a href="https://www.facebook.com/Infinity-101633657987333/?modal=admin_todo_tour"><img src="iconos/facebook.png" alt=""></a>  </div>
        <div id="icono2" class="redes"> <a href="https://www.facebook.com/Infinity-101633657987333/?modal=admin_todo_tour"><img src="iconos/Google.png" alt=""></a>  </div>
        <div id="icono3" class="redes"> <a href="https://www.facebook.com/Infinity-101633657987333/?modal=admin_todo_tour"><img src="iconos/teiter.png" alt=""></a>  </div>
       
    </header>
    <nav>
		<ul>
			<li><a id="aaa"     href="index.php">Principal</a></li>
			<li class="drop">
            <?php 


                    if ( $_SESSION['nombre'] != "YOU" )
                    {
                        $_link="administrarCuenta.php";
                    }
                    else
                    {
                    $_link="LobiLogeo.php";
                    }
                    ?>


                <a id="aaa" href="<?php echo $_link; ?>"><?= $_SESSION['nombre'];?></a>
				
				<div class="dropdownContain">
					<div class="dropOut">
						<div class="triangle"></div>
						<ul>
							<li><a href="busqueda.php" class="text-dark"> Busqueda </a> </li>
                            <?php 


                                if ( $_SESSION['nombre'] != "YOU"  )
                                {
                                    if( $_SESSION['tipo'] != "1" )
                                    {$_link="administrar.php";
                                    ?>                                    
                                    <li><a href="<?php echo $_link; ?>" class="text-dark">Administrar</a></li>
                                    <?php 
                                    }    
                            }
                                else
                                {
                                    
                                    $_link="LobiLogeo.php";
                                }
                                ?>
                                <li>
                            
                            <?php 


                    if ( $_SESSION['nombre'] != "YOU" )
                    {
                        ?>
                        <a href="<?php echo $_link; ?>"class="text-dark" >Administrar Cuenta </a></li>
                        <?php
                        $_link="administrarCuenta.php";
                    }
                    else
                    {
                    $_link="LobiLogeo.php";
                    }
                    ?>
                            
							
						</ul>
					</div>
				</div>
			
			</li>
            <li class="drop"><a id="aaa" href="#">Contactos</a>
            <div class="dropdownContain">
                <div class="dropOut">
                    <div class="triangle"></div>
                    <ul>
                        <li>Daniel Vega</li>
                        <li>Victor Ochoa</li>
                        <li>Aron Ramirez</li>
                        
                    </ul>
                </div>
            </div>
        </li><?php 


            if ( $_SESSION['nombre'] != "YOU" )
            {
                 $_log="SignOut";
                 $_link="destroyer.php";
            }
            else
            {
                $_log="SignIn";
                $_link="LobiLogeo.php";
            }
            ?>
            <li><a id="aaa" href="<?php echo $_link;  ?>"  ><?php echo $_log; ?></a></li>
		</ul>
</nav>