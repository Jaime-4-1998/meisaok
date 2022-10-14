





$(document).ready(function(){
    //Itemfoto
    $("#not").click(function(e) {
        $("#itemfoto").val("N/A");
        $("#itmfot").text("Dato Fotografico No Aplicable");
    });
    $("#nat").click(function(e) {
        $("#itemfoto").val("").attr("placeholder","Escribe el dato fotografíco").focus();
        $("#itmfot").text("Item Fotografico");
    });
     //ItemMeisa
    $("#mei").click(function(e) {
        $("#itemmeisa").val("N/A");
        $("#itmmei").text("Dato Meisa No Aplicable");
    });
    $("#mse").click(function(e) {
        $("#itemmeisa").val("").attr("placeholder","Escribe el dato meisa").focus();
        $("#itmmei").text("Item Meisa");
    });
     //ItemLote
    $("#lot").click(function(e) {
        $("#itemlote").val("N/A");
        $("#itlot").text("Dato Lote No Aplicable");
    });
    $("#lte").click(function(e) {
        $("#itemlote").val("").attr("placeholder","Escribe el dato lote").focus();
        $("#itlot").text("Item Lote");
    });
     //ModeloProd
    $("#mrp").click(function(e) {
        $("#itemmarca").val("N/A");
        $("#modpr").text("Dato de Marca No Aplicable");
    });
    $("#mar").click(function(e) {
        $("#itemmarca").val("").attr("placeholder","Escribe la Marca del Producto").focus();
        $("#modpr").text("Marca del Producto");
    });
    //ModeloProd
    $("#mdp").click(function(e) {
        $("#itemmodelo").val("N/A");
        $("#mop").text("Dato de Modelo No Aplicable");
    });
    $("#mpp").click(function(e) {
        $("#itemmodelo").val("").attr("placeholder","Escribe el Modelo del Producto").focus();
        $("#mop").text("Modelo del Producto");
    });
    //Número de Serie
    $("#nus").click(function(e) {
        $("#itemserie").val("N/A");
        $("#numer").text("Dato de Serie No Aplicable");
    });
    $("#nds").click(function(e) {
        $("#itemserie").val("").attr("placeholder","Escribe el Número de Serie").focus();
        $("#numer").text("Número de Serie");
    });
    //Año del Producto
    $("#adpy").click(function(e) {
        $("#itemyear").val("N/A");
        $("#anp").text("Dato de Año No Aplicable");
    });
    $("#ydpa").click(function(e) {
        $("#itemyear").val("").attr("placeholder","Ejemplo: 2022").focus();
        $("#anp").text("Año del Producto");
    });
    //Correiente del Producto
    $("#corre").click(function(e) {
        $("#itemcorr").val("N/A");
        $("#corr").text("Dato de Correiente No Aplicable");
    });
    $("#crrp").click(function(e) {
        $("#itemcorr").val("").attr("placeholder","Escribe la Correiente del Producto").focus();
        $("#corr").text("Correiente del Producto");
    });
    //Motor del Producto
    $("#pmt").click(function(e) {
        $("#itemmotor").val("N/A");
        $("#mtp").text("Dato de Motor No Aplicable");
    });
    $("#tmp").click(function(e) {
        $("#itemmotor").val("").attr("placeholder","Escribe el Motor del Producto").focus();
        $("#mtp").text("Motor del Producto");
    });
    //Capacidad del Producto
    $("#capi").click(function(e) {
        $("#itemcapa").val("N/A");
        $("#cap").text("Dato de Capacidad No Aplicable");
    });
    $("#capa").click(function(e) {
        $("#itemcapa").val("").attr("placeholder","Escribe la Capacidad del Producto").focus();
        $("#cap").text("Capacidad del Producto");
    });
    //Observaciones del Producto
    $("#obdp").click(function(e) {
        $("#itemobser").val("N/A");
        $("#odp").text("Dato de Observaciones No Aplicable");
    });
    $("#pod").click(function(e) {
        $("#itemobser").val("").attr("placeholder","Escribe las Observaciones del Producto").focus();
        $("#odp").text("Observaciones del Producto");
    });
    //Precio del Producto
    $("#prep").click(function(e) {
        $("#itemprecio").val("0000");
        $("#prec").text("Dato de Precio No Aplicable");
    });
    $("#preci").click(function(e) {
        $("#itemprecio").val("").attr("placeholder","Escribe Precio del Producto").focus();
        $("#prec").text("Precio del Producto");
    });
    //¿Existe en Youtube?
    $("#you").click(function(e) {
        $("#itemyou").val("N/A");
        $("#vide").text("Dato de Youtube No Aplicable");
    });
    $("#tube").click(function(e) {
        $("#itemyou").val("").attr("placeholder","Escribe el link de Youtube").focus();
        $("#vide").text("¿Existe en Youtube?");
    });
});