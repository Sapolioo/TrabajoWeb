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
            <img src="imagenes/icono.png" alt="imposible cargar">
        </div>
        <div><h1>INFINITY </h1></div>
        <div id="icono1" class="redes"></div>
        <div id="icono2" class="redes"></div>
        <div id="icono3" class="redes"></div>
       
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
							<ol><a href="busqueda.php"> Busqueda </a> </ol>
							<ol><a href="administrar.php">Administrar</a></ol>
							<ol><a href="administrarCuenta.php">Administrar Cuenta </a></ol>
							
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