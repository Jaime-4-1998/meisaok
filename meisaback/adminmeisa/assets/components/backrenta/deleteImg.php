<?php
include '../backend/conexion.php';
$idcol = $_POST['id'];
$consulta = "DELETE FROM columntwo WHERE id_col  = '$idcol'";
$eject = $mbd -> prepare($consulta); 
$eject -> execute();
?>