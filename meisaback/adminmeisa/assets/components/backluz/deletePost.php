<?php
include '../backend/conexion.php';
$idRent  = $_POST['id'];
$consulta = "DELETE FROM pageluz WHERE id_luz = '$idRent '";
$eject = $mbd -> prepare($consulta); 
$eject -> execute();
?>