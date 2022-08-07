<?php
include 'conexion.php';
$editorsecond = $statusMsge = '';
    if(isset($_POST['submite'])){   
        $aleatoriosec = vsprintf( '%s%s-%s-%s-%s-%s%s%s', str_split(bin2hex(random_bytes(16)), 4) );
        $titlesec = $_POST['titlesec'];
        $editorsecond = $_POST['editorsecond'];
        $titleseceng = $_POST['titleseceng'];
        $editorsecondeng = $_POST['editorsecondeng'];
        if(!empty($editorsecond)){
            $inserte = $db->query("INSERT INTO hometwo (id_home,titlesec,editorsecond,titleseceng,editorsecondeng) 
            VALUES ('".$aleatoriosec."','".$titlesec."','".$editorsecond."','".$titleseceng."','".$editorsecondeng."')");
            if($inserte){
                $statusMsge = "Tu articulo '".$aleatoriosec."' se ha publicado correctamente.";
            }else{
                $statusMsge = "algo anda mal.";
            }}else{
            $statusMsge = 'Por favor ingresa contenido.';
        }
}
?>