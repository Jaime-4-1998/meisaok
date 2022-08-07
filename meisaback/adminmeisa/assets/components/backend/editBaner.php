<?php
include 'conexion.php';

$id_baner = $_POST['idbanner'];
$prioridad = $_POST['prioridadEdit'];
$img = $_FILES['imgBannerEdit'];
$mensaje = $_POST['mensajeEdita'];
$seo = $_POST['seoEdita'];

if($img["type"] == "image/jpeg" or $img["type"] == "image/png"){
    $nomencri=md5($img["tmp_name"]);
    $ruta = "../../img/bann/".$nomencri.".jpg";
    move_uploaded_file($img["tmp_name"], $ruta);
    $rutaimg = "img/bann/".$nomencri.".jpg";

    $consulta = "UPDATE banners SET img = '$rutaimg', prioridad = '$prioridad', title = '$mensaje', seo = '$seo' WHERE id_banner = '$id_baner' "; 
    $eject = $mbd -> prepare($consulta); 
    $eject -> execute(); 
    echo 1;
}else{
    $consulta = "UPDATE banners SET prioridad = '$prioridad' WHERE id_banner = '$id_baner' "; 
    $eject = $mbd -> prepare($consulta); 
    $eject -> execute();
    echo 1; 
}