<?php include("header.php"); ?>
<?php include("querySimilaresPorGenero.php"); ?>
<div id="top"> 
        <ul>
                <li id="cajapadre">
                        <img src="imagenes/Diablo.jpg" alt="equis de" class="imagenRecomendadaimg">
                        <div id="contenedor">
                        <div id="contenedorsuperior"></div>
                        <div id="contenedorinferior">
                        <span><strong>DIABLO IV</strong></span>
                        </div>
                        </div>
                </li>
            <li id="cajapadre">
                    <img src="<?php echo $ruta ?>.jpg" alt="equis de" class="imagenRecomendadaimg">
                    <div id="contenedor">
                    <div id="contenedorsuperior"></div>
                    <div id="contenedorinferior">
                    <span><strong><?php echo $ruta ?></strong></span>
                    </div>
                    </div>
            </li>
            <li id="cajapadre">
                    <img src="imagenes/Assassins.jpg" alt="equis de" class="imagenRecomendadaimg">
                    <div id="contenedor">
                    <div id="contenedorsuperior"></div>
                    <div id="contenedorinferior">
                    <span><strong>ASSASSINS REMASTERED</strong></span>
                    </div>
                    </div>
            </li>
        </ul>
    </div>
    <section>
        <aside id="izq">
            <div id="titulodelproducto"><h2>Warcraft III: Reforged</h2></div>
            <div id="descripciondelproducto">Warcraft III: Reforged es un videojuego de estrategia en tiempo real creado por Blizzard Entertainment y es la tercera parte de la serie Warcraft. Además de continuar la historia del mundo épico medieval de Warcraft se distingue de sus predecesores por incorporar dos importantes cambios: el paso a los gráficos 3D y la aparición de dos nuevas razas.1​
            </div>
        </aside>
        <article>
            <div class="content">
                <img src="consulta.php" alt="SPAe">
            </div>
        </article>
        
    </section>




<?php include("footer.php"); ?>
