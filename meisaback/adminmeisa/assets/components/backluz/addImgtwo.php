<?php
include '../backend/conexion.php';
$id_col= vsprintf( '%s%s-%s-%s-%s-%s%s%s', str_split(bin2hex(random_bytes(16)), 4) );
$priority = $_POST['prioridad'];
$estadouso = $_POST['estadouso'];
$imgBaner= $_FILES['imgBanner'];
$title = $_POST['title'];
$content = $_POST['content'];
$titleeng = $_POST['titleeng'];
$contenteng = $_POST['contenteng'];
if(empty($priority)){
    echo 1;
}else{
    if($imgBaner["type"] == "image/jpeg" || $imgBaner["type"] == "image/png"){
        $nomencri=md5($imgBaner["tmp_name"]);
        $ruta = "../../img/colu/".$nomencri.".jpg";
        move_uploaded_file($imgBaner["tmp_name"], $ruta);
        $rutaimg = "img/colu/".$nomencri.".jpg";
        $consulta = 'INSERT INTO columnluz(id_col, estado,img, prioridad, title, content, engtitle, engcont) VALUES (:id_col, :estado,:img, :prioridad, :title, :content, :engtitle, :engcont)'; 
        $direcejec = $mbd -> prepare($consulta);
        $direcejec -> bindParam(':id_col',$id_col);
        $direcejec -> bindParam(':estado',$estadouso);
        $direcejec -> bindParam(':img',$rutaimg);
        $direcejec -> bindParam(':prioridad',$priority);
        $direcejec -> bindParam(':title',$title);
        $direcejec -> bindParam(':content',$content);
        $direcejec -> bindParam(':engtitle',$titleeng);
        $direcejec -> bindParam(':engcont',$contenteng);
        $direcejec->execute();
    }else{
        echo 2;
    }
}
?>