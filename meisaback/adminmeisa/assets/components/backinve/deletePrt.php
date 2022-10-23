<?php
include 'conexion.php';
$idcol = $_POST['id'];
$consulta = "DELETE FROM inventario WHERE inve_seguridad  = '$idcol'";
$eject = $mbd -> prepare($consulta); 
$eject -> execute();
?>