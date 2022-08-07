<?php
include '../backend/conexion.php';
$idHome = $_POST['id'];
$consulta = "DELETE FROM hometwo WHERE id_home = '$idHome'";
$eject = $mbd -> prepare($consulta); 
$eject -> execute();
?>