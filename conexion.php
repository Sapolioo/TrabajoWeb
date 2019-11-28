<?php

session_start();
if (!isset ($_SESSION['nombre']) )
{
    $_SESSION['nombre']='YOU';
}
$conn = mysqli_connect(
    'localhost',
    'root',
    '',
    'infinity'
);

?>