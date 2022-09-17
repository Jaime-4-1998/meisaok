<?php
include 'conexion.php';
$idBanner = $_POST['id'];
$consulta = "DELETE FROM imgvt WHERE id_imgven = '$idBanner'";
$eject = $mbd -> prepare($consulta); 
$eject -> execute();
?>