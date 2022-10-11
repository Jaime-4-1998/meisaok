<?php
include 'conexion.php';
$idcol = $_POST['id'];
$consulta = "DELETE FROM categoriainven WHERE id  = '$idcol'";
$eject = $mbd -> prepare($consulta); 
$eject -> execute();
?>