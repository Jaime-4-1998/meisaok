<?php
include '../backend/conexion.php';
$idcol = $_POST['id'];
$consulta = "DELETE FROM columnluz WHERE id_col  = '$idcol'";
$eject = $mbd -> prepare($consulta); 
$eject -> execute();
?>