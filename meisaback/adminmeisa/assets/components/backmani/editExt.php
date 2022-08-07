<?php
include '../backend/conexion.php';
$idimgx = $_POST['idimgx'];
$img= $_FILES['imgBanneredit'];
$seo_extraedit = $_POST['seo_extraedit'];

if($img["type"] == "image/jpeg" or $img["type"] == "image/png"){
    $nomencri=md5($img["tmp_name"]);
    $ruta = "../../img/eximg/".$nomencri.".jpg";
    move_uploaded_file($img["tmp_name"], $ruta);
    $rutaimg = "img/eximg/".$nomencri.".jpg";
    $consulta = "UPDATE imgextra SET img = '$rutaimg', seo_extra = '$seo_extraedit' WHERE id_img = '$idimgx' "; 
    $eject = $mbd -> prepare($consulta); 
    $eject -> execute(); 
}