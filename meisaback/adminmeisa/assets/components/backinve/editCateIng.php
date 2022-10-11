<?php
include 'conexion.php';

$id_cat = $_POST['idbannere'];
$categoditingles = $_POST['categoditingles'];

    $consulta = "UPDATE categoriainven SET nameingles = '$categoditingles' WHERE id = '$id_cat' "; 
    $eject = $mbd -> prepare($consulta); 
    $eject -> execute();
