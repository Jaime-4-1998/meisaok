<?php
include 'conexion.php';
$categodit = $_POST['categodit'];
$categoditert = $_POST['categoditert'];

        $consulta = 'INSERT INTO categoriainven(id,name,nameingles) VALUES (null,:name,:nameingles)'; 
        $direcejec = $mbd -> prepare($consulta);
        $direcejec -> bindParam(':name',$categodit);
        $direcejec -> bindParam(':nameingles',$categoditert);
        $direcejec->execute();
   
?>