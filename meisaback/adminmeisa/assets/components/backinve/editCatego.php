<?php
include 'conexion.php';

$id_cat = $_POST['idbanner'];
$catego = $_POST['categodit'];

    $consulta = "UPDATE categoriainven SET name = '$catego' WHERE id = '$id_cat' "; 
    $eject = $mbd -> prepare($consulta); 
    $eject -> execute();
