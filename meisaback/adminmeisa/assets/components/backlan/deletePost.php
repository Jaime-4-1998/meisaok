<?php
include '../backend/conexion.php';
$idHome = $_POST['id'];
$consulta = "DELETE FROM home WHERE id_home = '$idHome'";
$eject = $mbd -> prepare($consulta); 
$eject -> execute();
?>