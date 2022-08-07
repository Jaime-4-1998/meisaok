<?php
include 'conexion.php';
$titleEsp = $statusMsg = '';
if(isset($_POST['submit'])){
              $aleatorio = vsprintf( '%s%s-%s-%s-%s-%s%s%s', str_split(bin2hex(random_bytes(16)), 4) );
              $idmani = $_POST['idmani'];
              $titleEsp = $_POST['titlesp'];
              $editorContent = $_POST['editor'];
              $titleEng = $_POST['titleng'];
              $editorContentEng = $_POST['editoreng'];
              if(!empty($titleEsp)){
                  $insert = $db->query("UPDATE rentainf SET titlerent = '".$titleEsp."',contentrent= '".$editorContent."',titlerenteng = '".$titleEng."',contentrenteng = '".$editorContentEng."' WHERE id_rent = '".$idmani."' ");
                  if($insert){
                      $statusMsg = "Tu articulo '".$aleatorio."' se ha publicado correctamente.";
                  }else{
                      $statusMsg = "algo anda mal.";
                  }}else{
                  $statusMsg = 'Por favor ingresa contenido.';
              }
}
?>