<?php
include '../backend/conexion.php';

$idcoll = $_POST['idbanner'];
$priority = $_POST['prioridadrdit'];
$img= $_FILES['imgBannerrdit'];
$title = $_POST['titlerdit'];
$content = $_POST['contentrdit'];
$titleeng = $_POST['titleengrdit'];
$contenteng = $_POST['contentengrdit'];

if($img["type"] == "image/jpeg" or $img["type"] == "image/png"){
    $nomencri=md5($img["tmp_name"]);
    $ruta = "../../img/colu/".$nomencri.".jpg";
    move_uploaded_file($img["tmp_name"], $ruta);
    $rutaimg = "img/colu/".$nomencri.".jpg";

    $consulta = "UPDATE columnluz SET img = '$rutaimg', prioridad = '$priority', title = '$title', content = '$content', engtitle = '$titleeng', engcont = '$contenteng' WHERE id_col = '$idcoll' "; 
    $eject = $mbd -> prepare($consulta); 
    $eject -> execute(); 
}