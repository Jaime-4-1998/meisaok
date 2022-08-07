<?php
include 'conexion.php';
$categodit = $_POST['categodit'];

        $consulta = 'INSERT INTO categoriainven(id,name) VALUES (null,:name)'; 
        $direcejec = $mbd -> prepare($consulta);
        $direcejec -> bindParam(':name',$categodit);
        $direcejec->execute();
   
?>