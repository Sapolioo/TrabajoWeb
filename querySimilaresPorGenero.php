<?php 
$id=$_GET['id'];
$query="SELECT * 
FROM juego
WHERE juego.genero=(SELECT genero FROM juego WHERE juego.id_juego= $id)
AND juego.id_juego = $id";
$res=mysqli_query($conn,$query);
if(isset($res))
                        while($row = mysqli_fetch_array($res)){ ?>
                    <tr>
                        <td><a  href="infoJuego.php?id=<?php echo $row['id'];?>"><?php echo $row['ruta'];?></a>   </td>
                        <td> <?php echo $row['ruta'];
                        $ruta=$row['ruta'];?>  </td>
                        <td> <?php echo $row['descripcion'];?>  </td>
                        
                    </tr> 
                    <?php
                        }
                        ?>


                    




                        