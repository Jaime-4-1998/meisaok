<?php
include 'conexion.php';
$idBaner= substr(md5(time()), 0, 10);
$priority = $_POST['prioridad'];
$imgBaner= $_FILES['imgBanner'];
$title = $_POST['title'];
$seo = $_POST['seo'];
if(empty($priority)){
    echo 1;
}else{
    if($imgBaner["type"] == "image/jpeg" || $imgBaner["type"] == "image/png"){
        $nomencri=md5($imgBaner["tmp_name"]);
        $ruta = "../../img/bann/".$nomencri.".jpg";
        move_uploaded_file($imgBaner["tmp_name"], $ruta);
        $rutaimg = "img/bann/".$nomencri.".jpg";
        $consulta = 'INSERT INTO banners(id_banner, img, prioridad, title, seo) VALUES (:id_banner, :img, :prioridad, :title, :seo)'; 
        $direcejec = $mbd -> prepare($consulta);
        $direcejec -> bindParam(':id_banner',$idBaner);
        $direcejec -> bindParam(':img',$rutaimg);
        $direcejec -> bindParam(':prioridad',$priority);
        $direcejec -> bindParam(':title',$title);
        $direcejec -> bindParam(':seo',$seo);
        $direcejec->execute();
    }else{
        echo 2;
    }
}
?>