<?php
include 'conexion.php';
$editorContent = $statusMsg = '';
$editorsecond = $statusMsge = '';
if(isset($_POST['submit'])){
              $aleatorio = vsprintf( '%s%s-%s-%s-%s-%s%s%s', str_split(bin2hex(random_bytes(16)), 4) );
              $titleEsp = $_POST['titlesp'];
              $editorContent = $_POST['editor'];
              $titleEng = $_POST['titleng'];
              $editorContentEng = $_POST['editoreng'];
              if(!empty($editorContent)){
                  $insert = $db->query("INSERT INTO home (id_home,title_one,desc_one,title_eng,desc_oneng) 
                  VALUES ('".$aleatorio."','".$titleEsp."','".$editorContent."','".$titleEng."','".$editorContentEng."')");
                  if($insert){
                      $statusMsg = "Tu articulo '".$aleatorio."' se ha publicado correctamente.";
                  }else{
                      $statusMsg = "algo anda mal.";
                  }}else{
                  $statusMsg = 'Por favor ingresa contenido.';
              }
}else{
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
}
?>