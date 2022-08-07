<?php
include '../backend/conexion.php';
$idRent  = $_POST['id'];
$consulta = "DELETE FROM rentainf WHERE id_rent = '$idRent '";
$eject = $mbd -> prepare($consulta); 
$eject -> execute();
?>