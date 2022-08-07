<?php
include 'conexion.php';
$id_col= vsprintf( '%s%s-%s-%s-%s-%s%s%s', str_split(bin2hex(random_bytes(16)), 4) );
$priority = $_POST['prioridad'];
$imgBaner= $_FILES['imgBanner'];
$title = $_POST['title'];
$content = $_POST['content'];
if(empty($priority)){
    echo 1;
}else{
    if($imgBaner["type"] == "image/jpeg" || $imgBaner["type"] == "image/png"){
        $nomencri=md5($imgBaner["tmp_name"]);
        $ruta = "../../img/colu/".$nomencri.".jpg";
        move_uploaded_file($imgBaner["tmp_name"], $ruta);
        $rutaimg = "img/colu/".$nomencri.".jpg";
        $consulta = 'INSERT INTO columnfour(id_col, img, prioridad, title, content) VALUES (:id_col, :img, :prioridad, :title, :content)'; 
        $direcejec = $mbd -> prepare($consulta);
        $direcejec -> bindParam(':id_col',$id_col);
        $direcejec -> bindParam(':img',$rutaimg);
        $direcejec -> bindParam(':prioridad',$priority);
        $direcejec -> bindParam(':title',$title);
        $direcejec -> bindParam(':content',$content);
        $direcejec->execute();
    }else{
        echo 2;
    }
}
?>