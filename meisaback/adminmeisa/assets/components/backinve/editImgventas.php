<?php
include 'conexion.php';

$id_baner = $_POST['idbanner'];
$prioridad = $_POST['prioridadEdit'];
$img = $_FILES['imgBannerEdit'];
$mensaje = $_POST['mensajeEdita'];
$mensajes = $_POST['mensajeEditaeng'];
$seo = $_POST['seoEdita'];

if($img["type"] == "image/jpeg" or $img["type"] == "image/png"){
    $nomencri=md5($img["tmp_name"]);
    $ruta = "../../img/bann/".$nomencri.".jpg";
    move_uploaded_file($img["tmp_name"], $ruta);
    $rutaimg = "img/bann/".$nomencri.".jpg";

    $consulta = "UPDATE imgvt SET img = '$rutaimg', prioridad = '$prioridad', title = '$mensaje', titleeng = '$mensajes', seo = '$seo' WHERE id_imgven = '$id_baner' "; 
    $eject = $mbd -> prepare($consulta); 
    $eject -> execute(); 
    echo 1;
}else{
    $consulta = "UPDATE imgvt SET prioridad = '$prioridad' WHERE id_imgven = '$id_baner' "; 
    $eject = $mbd -> prepare($consulta); 
    $eject -> execute();
    echo 1; 
}