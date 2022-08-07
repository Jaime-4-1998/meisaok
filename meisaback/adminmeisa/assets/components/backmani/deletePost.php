<?php
include '../backend/conexion.php';
$idMani  = $_POST['id'];
$consulta = "DELETE FROM maniobrameisa WHERE id_mani  = '$idMani '";
$eject = $mbd -> prepare($consulta); 
$eject -> execute();
?>