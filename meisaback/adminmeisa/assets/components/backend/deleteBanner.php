<?php
include 'conexion.php';
$idBanner = $_POST['id'];
$consulta = "DELETE FROM banners WHERE id_banner = '$idBanner'";
$eject = $mbd -> prepare($consulta); 
$eject -> execute();
?>