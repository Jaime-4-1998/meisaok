<?php
include 'conexion.php';
$idBaner= substr(md5(time()), 0, 10);
$priority = $_POST['prioridad'];
$imgBaner= $_FILES['imgBanner'];
$title = $_POST['title'];
$titleeng = $_POST['titleeng'];
$seo = $_POST['seo'];
if(empty($priority)){
    echo 1;
}else{
    if($imgBaner["type"] == "image/jpeg" || $imgBaner["type"] == "image/png"){
        $nomencri=md5($imgBaner["tmp_name"]);
        $ruta = "../../img/bann/".$nomencri.".jpg";
        move_uploaded_file($imgBaner["tmp_name"], $ruta);
        $rutaimg = "img/bann/".$nomencri.".jpg";
        $consulta = 'INSERT INTO imgvt(id_imgven, img, prioridad, title, titleeng, seo) VALUES (:id_imgven, :img, :prioridad, :title,:titleeng, :seo)'; 
        $direcejec = $mbd -> prepare($consulta);
        $direcejec -> bindParam(':id_imgven',$idBaner);
        $direcejec -> bindParam(':img',$rutaimg);
        $direcejec -> bindParam(':prioridad',$priority);
        $direcejec -> bindParam(':title',$title);
        $direcejec -> bindParam(':titleeng',$titleeng);
        $direcejec -> bindParam(':seo',$seo);
        $direcejec->execute();
    }else{
        echo 2;
    }
}
?>