<?php
include 'conexion.php';
$files= $_FILES['files'];
$token= vsprintf( '%s%s-%s-%s-%s-%s%s%s', str_split(bin2hex(random_bytes(16)), 4) );
$set = $_POST['set'];
$itemcatphoto = $_POST['itemcatphoto'];
$itemnombrerphoto = $_POST['itemnombrerphoto'];
// Count total files
$countfiles = count($_FILES['files']['name']);
// Prepared statement
$query = "INSERT INTO images (inve_seg,inve_category,inve_nombre,seguridad,image,name) VALUES('$set','$itemcatphoto','$itemnombrerphoto',?,?,'$token')";
$statement = $mbd->prepare($query);
for($i = 0; $i < $countfiles; $i++) {
        $nomencri=md5($_FILES['files']['name'][$i]);
        $ruta = "../../img/inve/upload/".$nomencri.".jpg";
        move_uploaded_file($_FILES['files']['tmp_name'][$i],$ruta);
        $rutaimg = "img/inve/upload/".$nomencri.".jpg";
        $statement->execute(array($nomencri,$rutaimg));
}
?>