<?php
include 'conexion.php';
$idcol = $_POST['id'];
$consulta = "DELETE FROM columnfour WHERE id_col  = '$idcol'";
$eject = $mbd -> prepare($consulta); 
$eject -> execute();
?>