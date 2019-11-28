<?php
include("header.php");
?>
     <div class="card card-body bg-secondary text-white" id="top">
            <form action="busqueda.php" method="POST">
            
                <div class="form-group">
                    <input type="text" name="title" class="form-control" placeholder="JUEGO" autofocus>
                </div>    
                <div class="form-group">
                    <textarea  name="description" rows="2" class="form-control" placeholder="PALABRA CLAVE"></textarea>
                </div>
                


                <input type="submit" class="btn btn-light text-white btn-block bg-dark"
                name="save_task" placeholder="Save Task">


            </form>
        </div>
        <?php
                    if(isset($_POST['title']))
        {
        ?>
        <div  class="col m d8 bg-secondary text-white" id="toptop">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                        <th >JUEGO</th>
                        <th>PRECIO</th>
                        <th>DESCRIPCION</th>
                        <th>ACTIONS</th>        
                        </tr>
                    </thead>
                    <tbody>

                    <?php
         
                        $title = $_POST['title'];
                        $description = $_POST['description'];
                        $query = "SELECT 
                        juego.id_juego As 'id',
                        juego.nombre AS 'nombre',
                        juego.precio AS 'precio',
                        juego.descripcion AS 'descripcion'
                        FROM
                        juego
                        WHERE
                        juego.nombre LIKE '%$title%'
                        OR
                        juego.descripcion LIKE '%$description%'
                        ORDER BY
                        juego.nombre ASC;
                        "
                        
                        ;
                        $resulta_tasks = mysqli_query($conn , $query);
                        if(isset($resulta_tasks))
                        while($row = mysqli_fetch_array($resulta_tasks)){ ?>
                    <tr>
                        <td><a  href="infoJuego.php?id=<?php echo $row['id'];?>"><?php echo $row['nombre'];?></a>   </td>
                        <td> <?php echo $row['precio'];?>  </td>
                        <td> <?php echo $row['descripcion'];?>  </td>
                        <td>

                        <?php
                        if(isset($_SESSION['tipo']))
                            switch($_SESSION['tipo'])
                            {
                                case 1:
                                    ?>
                                   <a href="compra.php?id=<?php echo $row['id']?>" class="btn btn-success"><i class="fas fa-shopping-cart"></i> </a>
                                   <a href="reserva.php?id=<?php echo $row['id']?>" class="btn btn-primary"><i class="fas fa-receipt"></i> </a>
                                    <?php
                                break;
                                case 2:
                                    ?>
                                    <a href="delete.php?id=<?php echo $row['id']?>" class="btn btn-danger"> <i class="fas fa-trash"></i>  </a>
                                    <a href="edit.php?id=<?php echo $row['id']?>" class="btn btn-primary"><i class="fas fa-pencil-alt"></i> </a><?php
                                break;
                                case 3:
                                    ?>
                                    <a href="delete.php?id=<?php echo $row['id']?>" class="btn btn-danger"> <i class="fas fa-trash"></i>  </a>
                                    <a href="edit.php?id=<?php echo $row['id']?>" class="btn btn-primary"><i class="fas fa-pencil-alt"></i> </a>
                                    
                                    <?php
                                break;

                            }

                        ?>


                        
                        </td>
                    </tr>

                    <?php }
                    }
                    ?>
                    
                    </tbody>
                </table>
    </div>




       <?php
       include("footer.php");
       ?>





<!--
                    Tienes que terminar la parte que mostrara a cada Usuarios, es decir que accion puede hacer el diferentetipo de cuenta, el carrito de compras el basurero etc, no tiene nada, solo busca el juego que quieres,


    -->