<?php
include '../backend/conexion.php';
$idimg = $_POST['id'];
$consulta = "DELETE FROM imgextra WHERE id_img = '$idimg'";
$eject = $mbd -> prepare($consulta); 
$eject -> execute();
?>