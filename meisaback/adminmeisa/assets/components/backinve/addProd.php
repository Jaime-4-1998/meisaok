<?php
include 'conexion.php';
$id_col= vsprintf( '%s%s-%s-%s-%s-%s%s%s', str_split(bin2hex(random_bytes(16)), 4) );
$itemfoto=$_POST['itemfoto'];
$itemmeisa=$_POST['itemmeisa'];
$itemlote=$_POST['itemlote'];
$itemventa=$_POST['itemventa'];
$itemrenta=$_POST['itemrenta'];
$itemcatego=$_POST['itemcatego'];
$itemnombre=$_POST['itemnombre'];
$itemdesc=$_POST['itemdesc'];
$itemmarca=$_POST['itemmarca'];
$itemmodelo=$_POST['itemmodelo'];
$itemserie=$_POST['itemserie'];
$itemyear=$_POST['itemyear'];
$itemcorr=$_POST['itemcorr'];
$itemmotor=$_POST['itemmotor'];
$itemcapa=$_POST['itemcapa'];
$itemobser=$_POST['itemobser'];
$imgBaner= $_FILES['imgBanner'];
$imgtrasera=$_FILES['imgtrasera'];
$imgdere=$_FILES['imgdere'];
$imgizq=$_FILES['imgizq'];
$itemprecio=$_POST['itemprecio'];
$itemestatus=$_POST['itemestatus'];
$itemefbmx=$_POST['itemefbmx'];
$itemefbequip=$_POST['itemefbequip'];
$itemsegun=$_POST['itemsegun'];
$itemlink=$_POST['itemlink'];
$itemercado=$_POST['itemercado'];
$itemtw=$_POST['itemtw'];
$itemins=$_POST['itemins'];
$itemyou=$_POST['itemyou'];
if(empty($itemfoto)){
    echo 1;
}else{
    if($imgBaner["type"] == "image/jpeg" || $imgBaner["type"] == "image/png"){
        $nomencri=md5($imgBaner["tmp_name"]);
        $ruta = "../../img/inve/".$nomencri.".jpg";
        move_uploaded_file($imgBaner["tmp_name"], $ruta);
        $rutaimg = "img/inve/".$nomencri.".jpg";
    if($imgtrasera["type"] == "image/jpeg" || $imgtrasera["type"] == "image/png"){
        $nomencri1=md5($imgtrasera["tmp_name"]);
        $ruta1 = "../../img/inve/tras/".$nomencri1.".jpg";
        move_uploaded_file($imgtrasera["tmp_name"], $ruta1);
        $rutaimg1 = "img/inve/tras/".$nomencri1.".jpg";
    }
    if($imgdere["type"] == "image/jpeg" || $imgdere["type"] == "image/png"){
        $nomencri2=md5($imgdere["tmp_name"]);
        $ruta2 = "../../img/inve/dere/".$nomencri2.".jpg";
        move_uploaded_file($imgdere["tmp_name"], $ruta2);
        $rutaimg2 = "img/inve/dere/".$nomencri2.".jpg";
    }
    if($imgizq["type"] == "image/jpeg" || $imgizq["type"] == "image/png"){
        $nomencri3=md5($imgizq["tmp_name"]);
        $ruta3 = "../../img/inve/izq/".$nomencri3.".jpg";
        move_uploaded_file($imgizq["tmp_name"], $ruta3);
        $rutaimg3 = "img/inve/izq/".$nomencri3.".jpg";
    }
       $consulta = 'INSERT INTO inventario(inve_id, inve_seguridad, inve_itemfoto, inve_itemmeisa, inve_lote, inve_venre, inve_renve, inve_catego, inve_nombre, inve_desc, inve_marca, inve_modelo, inve_serie, inve_year, inve_corriente, inve_motor, inve_capacidad, inve_observaciones, inve_img, inve_imgtrasera, inve_imgldderecho, inve_imgldizq, inve_precio, inve_estatus, inve_fbmeisamex, inve_fbmeisaequip, inve_segunda, inve_linke, inve_mercado, inve_tw, inve_ins, inve_youtube) VALUES (null, :inve_seguridad, :inve_itemfoto, :inve_itemmeisa, :inve_lote, :inve_venre, :inve_renve, :inve_catego, :inve_nombre, :inve_desc, :inve_marca, :inve_modelo, :inve_serie, :inve_year, :inve_corriente, :inve_motor, :inve_capacidad, :inve_observaciones, :inve_img, :inve_imgtrasera, :inve_imgldderecho, :inve_imgldizq, :inve_precio, :inve_estatus, :inve_fbmeisamex, :inve_fbmeisaequip, :inve_segunda, :inve_linke, :inve_mercado, :inve_tw, :inve_ins, :inve_youtube)'; 
        $direcejec = $mbd -> prepare($consulta);
        $direcejec -> bindParam(':inve_seguridad',$id_col);
        $direcejec -> bindParam(':inve_itemfoto',$itemfoto);
        $direcejec -> bindParam(':inve_itemmeisa',$itemmeisa);
        $direcejec -> bindParam(':inve_lote',$itemlote);
        $direcejec -> bindParam(':inve_venre',$itemventa);
        $direcejec -> bindParam(':inve_renve',$itemrenta);
        $direcejec -> bindParam(':inve_catego',$itemcatego);
        $direcejec -> bindParam(':inve_nombre',$itemnombre);
        $direcejec -> bindParam(':inve_desc',$itemdesc);
        $direcejec -> bindParam(':inve_marca',$itemmarca);
        $direcejec -> bindParam(':inve_modelo',$itemmodelo);
        $direcejec -> bindParam(':inve_serie',$itemserie);
        $direcejec -> bindParam(':inve_year',$itemyear);
        $direcejec -> bindParam(':inve_corriente',$itemcorr);
        $direcejec -> bindParam(':inve_motor',$itemmotor);
        $direcejec -> bindParam(':inve_capacidad',$itemcapa);
        $direcejec -> bindParam(':inve_observaciones',$itemobser);
        $direcejec -> bindParam(':inve_img',$rutaimg);
        $direcejec -> bindParam(':inve_imgtrasera',$rutaimg1);
        $direcejec -> bindParam(':inve_imgldderecho',$rutaimg2);
        $direcejec -> bindParam(':inve_imgldizq',$rutaimg3);
        $direcejec -> bindParam(':inve_precio',$itemprecio);
        $direcejec -> bindParam(':inve_estatus',$itemestatus);
        $direcejec -> bindParam(':inve_fbmeisamex',$itemefbmx);
        $direcejec -> bindParam(':inve_fbmeisaequip',$itemefbequip);
        $direcejec -> bindParam(':inve_segunda',$itemsegun);
        $direcejec -> bindParam(':inve_linke',$itemlink);
        $direcejec -> bindParam(':inve_mercado',$itemercado);
        $direcejec -> bindParam(':inve_tw',$itemtw);
        $direcejec -> bindParam(':inve_ins',$itemins);
        $direcejec -> bindParam(':inve_youtube',$itemyou);
        $direcejec->execute();
    }else{
        echo 2;
    }
}
?>