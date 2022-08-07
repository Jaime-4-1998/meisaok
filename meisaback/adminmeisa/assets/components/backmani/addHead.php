<?php
include 'conexion.php';
$editorContent = $statusMsg = '';
if(isset($_POST['submit'])){
              $aleatorio = vsprintf( '%s%s-%s-%s-%s-%s%s%s', str_split(bin2hex(random_bytes(16)), 4) );
              $titleEsp = $_POST['titlesp'];
              $editorContent = $_POST['editor'];
              $titleEng = $_POST['titleng'];
              $editorContentEng = $_POST['editoreng'];
              if(!empty($editorContent)){
                  $insert = $db->query("INSERT INTO maniobrameisa (id_mani,titlemani,contentmani,titlemanieng,contentmanieng) 
                  VALUES ('".$aleatorio."','".$titleEsp."','".$editorContent."','".$titleEng."','".$editorContentEng."')");
                  if($insert){
                      $statusMsg = "Tu articulo '".$aleatorio."' se ha publicado correctamente.";
                  }else{
                      $statusMsg = "algo anda mal.";
                  }}else{
                  $statusMsg = 'Por favor ingresa contenido.';
              }
}
?>