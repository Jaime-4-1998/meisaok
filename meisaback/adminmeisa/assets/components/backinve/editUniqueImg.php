<?php
include 'conexion.php';

$seto = $_POST['seto'];
$filesx= $_FILES['filesx'];

if($filesx["type"] == "image/jpeg" or $filesx["type"] == "image/png"){
    $nomencri=md5($filesx["tmp_name"]);
    $ruta = "../../img/inve/".$nomencri.".jpg";
    move_uploaded_file($filesx["tmp_name"], $ruta);
    $rutaimg = "img/inve/".$nomencri.".jpg";

    $consulta = "UPDATE inventario SET inve_img = '$rutaimg' WHERE inve_id = '$seto' "; 
    $eject = $mbd -> prepare($consulta); 
    $eject -> execute(); 
    echo 1;
}