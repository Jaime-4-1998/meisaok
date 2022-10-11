<?php
include 'conexion.php';

$idcoll = $_POST['idbanner'];
$itemfoto=$_POST['itemfoto'];
$itemmeisa=$_POST['itemmeisa'];
$itemlote=$_POST['itemlote'];
$itemventa=$_POST['itemventa'];
$itemrenta=$_POST['itemrenta'];
$itemcatego=$_POST['itemcatego'];
$itemcategory=$_POST['itemcategory'];
$itemnombre=$_POST['itemnombre'];
$itemnombrein=$_POST['itemnombrein'];
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

    $consulta = "UPDATE inventario SET inve_itemfoto = '$itemfoto', inve_itemmeisa = '$itemmeisa', inve_lote = '$itemlote',
     inve_venre = '$itemventa', inve_renve = '$itemrenta', inve_catego = '$itemcatego', inve_category = '$itemcategory', inve_nombre = '$itemnombre', inve_nombreingles = '$itemnombrein',inve_desc = '$itemdesc', inve_marca = '$itemmarca', inve_modelo = '$itemmodelo',
    inve_serie = '$itemserie', inve_year = '$itemyear', inve_corriente = '$itemcorr', inve_motor = '$itemmotor', inve_capacidad = '$itemcapa', inve_observaciones = '$itemobser', 
    inve_img = '$rutaimg', inve_imgtrasera = '$rutaimg1', inve_imgldderecho = '$rutaimg2', inve_imgldizq = '$rutaimg3',
    inve_precio = '$itemprecio', inve_estatus = '$itemestatus', inve_fbmeisamex = '$itemefbmx', inve_fbmeisaequip = '$itemefbequip',
    inve_segunda = '$itemsegun', inve_linke = '$itemlink', inve_mercado = '$itemercado', inve_tw = '$itemtw', 
    inve_ins = '$itemins', inve_youtube = '$itemyou' WHERE inve_id = '$idcoll' "; 

    $eject = $mbd -> prepare($consulta); 
    $eject -> execute(); 
    echo 1;
}