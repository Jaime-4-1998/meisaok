<?php
include 'conexion.php';

$seg = $_POST['seg'];
$itemfotor=$_POST['itemfotor'];
$itemmeisar=$_POST['itemmeisar'];
$itemloter=$_POST['itemloter'];
$itemventar=$_POST['itemventar'];
$itemrentar=$_POST['itemrentar'];
$itemcategor=$_POST['itemcategor'];
$itemcategoryr=$_POST['itemcategoryr'];
$itemnombrer=$_POST['itemnombrer'];
    $convertidor = str_replace(" ", "-", $itemnombrer);
$itemnombreinr=$_POST['itemnombreinr'];
    $contr = str_replace(" ","-",$itemnombreinr);
$itemdescr=$_POST['itemdescr'];
$itemmarcar=$_POST['itemmarcar'];
$itemmodelor=$_POST['itemmodelor'];
$itemserier=$_POST['itemserier'];
$itemyearr=$_POST['itemyearr'];
$itemcorrr=$_POST['itemcorrr'];
$itemmotorr=$_POST['itemmotorr'];
$itemcapar=$_POST['itemcapar'];
$itemobserr=$_POST['itemobserr'];
$imgBanerr= $_FILES['imgBannerr'];
$itemprecior=$_POST['itemprecior'];
$itemestatusr=$_POST['itemestatusr'];
$itemefbmxr=$_POST['itemefbmxr'];
$itemefbequipr=$_POST['itemefbequipr'];
$itemsegunr=$_POST['itemsegunr'];
$itemlinkr=$_POST['itemlinkr'];
$itemercador=$_POST['itemercador'];
$itemtwr=$_POST['itemtwr'];
$iteminsr=$_POST['iteminsr'];
$itemyour=$_POST['itemyour'];

if($imgBanerr["type"] == "image/jpeg" || $imgBanerr["type"] == "image/png"){
    $nomencri=md5($imgBanerr["tmp_name"]);
    $ruta = "../../img/inve/".$nomencri.".jpg";
    move_uploaded_file($imgBanerr["tmp_name"], $ruta);
    $rutaimg = "img/inve/".$nomencri.".jpg";}

    $consulta = "UPDATE inventario SET inve_itemfoto = '$itemfotor', inve_itemmeisa = '$itemmeisar', inve_lote = '$itemloter',
     inve_venre = '$itemventar', inve_renve = '$itemrentar', inve_catego = '$itemcategor', inve_category = '$itemcategoryr', inve_nombre = '$convertidor', inve_nombreingles = '$contr',inve_desc = '$itemdescr', inve_marca = '$itemmarcar', inve_modelo = '$itemmodelor',
    inve_serie = '$itemserier', inve_year = '$itemyearr', inve_corriente = '$itemcorrr', inve_motor = '$itemmotorr', inve_capacidad = '$itemcapar', inve_observaciones = '$itemobserr', 
    inve_img = '$rutaimg',
    inve_precio = '$itemprecior', inve_estatus = '$itemestatusr', inve_fbmeisamex = '$itemefbmxr', inve_fbmeisaequip = '$itemefbequipr',
    inve_segunda = '$itemsegunr', inve_linke = '$itemlinkr', inve_mercado = '$itemercador', inve_tw = '$itemtwr', 
    inve_ins = '$iteminsr', inve_youtube = '$itemyour' WHERE inve_seguridad = '$seg' "; 

    $eject = $mbd -> prepare($consulta); 
    $eject -> execute(); 