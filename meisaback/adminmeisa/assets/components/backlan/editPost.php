<?php
include 'conexion.php';
$titleEsp = $statusMsg = '';
$editorsecond = $statusMsge = '';
if(isset($_POST['submit'])){
              $aleatorio = vsprintf( '%s%s-%s-%s-%s-%s%s%s', str_split(bin2hex(random_bytes(16)), 4) );
              $idhome = $_POST['idhome'];
              $titleEsp = $_POST['titlesp'];
              $editorContent = $_POST['editor'];
              $titleEng = $_POST['titleng'];
              $editorContentEng = $_POST['editoreng'];
              if(!empty($titleEsp)){
                  $insert = $db->query("UPDATE home SET title_one = '".$titleEsp."',desc_one= '".$editorContent."',title_eng = '".$titleEng."',desc_oneng = '".$editorContentEng."' WHERE id_home = '".$idhome."' ");
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
        $idhomee = $_POST['idhomee'];
        $titlesec = $_POST['titlesec'];
        $editorsecond = $_POST['editorsecond'];
        $titleseceng = $_POST['titleseceng'];
        $editorsecondeng = $_POST['editorsecondeng'];
        if(!empty($editorsecond)){
            $inserte = $db->query("UPDATE hometwo SET titlesec = '".$titlesec."',editorsecond= '".$editorsecond."',titleseceng = '".$titleseceng."',editorsecondeng = '".$editorsecondeng."' WHERE id_home = '".$idhomee."' ");
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