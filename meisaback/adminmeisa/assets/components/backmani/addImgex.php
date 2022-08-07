<?php
include '../backend/conexion.php';
$id_img= vsprintf( '%s%s-%s-%s-%s-%s%s%s', str_split(bin2hex(random_bytes(16)), 4) );
$imgBaner= $_FILES['imgBanner'];
$seo_extra = $_POST['seo_extra'];
if(empty($seo_extra)){
    echo 1;
}else{
    if($imgBaner["type"] == "image/jpeg" || $imgBaner["type"] == "image/png"){
        $nomencri=md5($imgBaner["tmp_name"]);
        $ruta = "../../img/eximg/".$nomencri.".jpg";
        move_uploaded_file($imgBaner["tmp_name"], $ruta);
        $rutaimg = "img/eximg/".$nomencri.".jpg";
        $consulta = 'INSERT INTO imgextra(id_img, seo_extra, img) VALUES (:id_img, :seo_extra, :img)'; 
        $direcejec = $mbd -> prepare($consulta);
        $direcejec -> bindParam(':id_img',$id_img);
        $direcejec -> bindParam(':img',$rutaimg);
        $direcejec -> bindParam(':seo_extra',$seo_extra);
        $direcejec->execute();
    }else{
        echo 2;
    }
}
?>