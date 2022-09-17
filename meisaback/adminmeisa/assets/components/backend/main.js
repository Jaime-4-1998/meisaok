/*BANNERS*/
function addBaner(){
    var Form = new FormData($('#formBanner')[0]); 
    $.ajax({
        url:"http://localhost/meisa/meisaback/adminmeisa/assets/components/backend/addBaner.php", 
        type: 'post',
        data: Form,
        processData: false,
        contentType:false,
                        success:function(response){
                            Swal.fire({
                            icon: 'success',
                            title: 'Banner Actualizado',
                            confirmButtonColor: '#a20c19',
                            text: 'Guardaste un Banner, da un clic en "Seguir"',
                            confirmButtonText:
                                '<a class="text-white" href="http://localhost/meisa/meisaback/adminmeisa/Banner/NewBanner">SEGUIR</a> '
                            })
                        }
    });
}
/*editar banner*/
function verEdiatarBanner(datos){
    d=datos.split('||');
    $('#idbanner').val(d[0]);
    $('#previewBanerEdit').append('<img width="150px" src="'+(d[1])+'" alt="BANNER ASAVE"/>');
    $('#prioridadEdit').val(d[2]);
    $('#mensajeEdit').val(d[3]);
    $('#seo').val(d[4]);
}
function editBaner(){
    var Form = new FormData($('#formBannerEdit')[0]); 
    $.ajax({
        url:"http://localhost/meisa/meisaback/adminmeisa/assets/components/backend/editBaner.php", 
        type: 'post',
        data: Form,
        processData: false,
        contentType:false,
        success:function(response){
            Swal.fire({
            icon: 'success',
            title: 'Banner Actualizado',
            confirmButtonColor: '#a20c19',
            text: 'Guardaste un Banner, da un clic en "Seguir"',
            confirmButtonText:
                '<a class="text-white" href="http://localhost/meisa/meisaback/adminmeisa/Banner/NewBanner">SEGUIR</a> '
            })
        }
    });
}
/*eliminar banner*/
function preguntarSiNoBanner(id){
	alertify.confirm('Eliminar Datos', '¿Esta seguro de eliminar este banner?', 
            function(){ eliminarBanner(id) }
        , function(){ alertify.error('Se cancelo')});
}
function eliminarBanner(id){
cadena="id=" + id;
    $.ajax({
        type:"POST",
        url:"http://localhost/meisa/meisaback/adminmeisa/assets/components/backend/deleteBanner.php",
        data:cadena,
        success:function(response){
            Swal.fire({
            icon: 'success',
            title: 'Banner eliminado',
            confirmButtonColor: '#a20c19',
            text: 'Guardaste un Banner, da un clic en "Seguir"',
            confirmButtonText:
                '<a class="text-white" href="http://localhost/meisa/meisaback/adminmeisa/Banner/NewBanner">SEGUIR</a> '
            })
        }
       
    });
}
/*END OF BANNERS*/
/*TITLES LANGUAGES*/
function deletepts(id){
	alertify.confirm('Eliminar Datos', '¿Esta seguro de eliminar este post?', 
            function(){ deletelan(id) }
        , function(){ alertify.error('Se cancelo')});
}
function deletelan(id){
cadena="id=" + id;
    $.ajax({
        type:"POST",
        url:"http://localhost/meisa/meisaback/adminmeisa/assets/components/backlan/deletePost.php",
        data:cadena,
        success:function(response){
            Swal.fire({
            icon: 'success',
            title: 'Post eliminado',
            confirmButtonColor: '#a20c19',
            text: 'ELiminaste un Post, da un clic en "Seguir"',
            confirmButtonText:
                '<a class="text-white" href="http://localhost/meisa/meisaback/adminmeisa/Begin/Title">SEGUIR</a> '
            })
        }
       
    });
}
/*DELTE POST LANGUAGE*/
function deletesecond(id){
	alertify.confirm('Eliminar Datos', '¿Esta seguro de eliminar este post?', 
            function(){ deletelansec(id) }
        , function(){ alertify.error('Se cancelo')});
}
function deletelansec(id){
cadena="id=" + id;
    $.ajax({
        type:"POST",
        url:"http://localhost/meisa/meisaback/adminmeisa/assets/components/backlan/deletePoste.php",
        data:cadena,
        success:function(response){
            Swal.fire({
            icon: 'success',
            title: 'Post eliminado del segundo encabezado',
            confirmButtonColor: '#a20c19',
            text: 'ELiminaste un Post del segundo encabezado, da un clic en "Seguir"',
            confirmButtonText:
                '<a class="text-white" href="http://localhost/meisa/meisaback/adminmeisa/Begin/Title">SEGUIR</a> '
            })
        }
       
    });
}

/*END OF TITLES LANGUAGES*/
/*ADD COLUMNS ESP*/
function addColumn(){
    var Form = new FormData($('#formBanner')[0]); 
    $.ajax({
        url:"http://localhost/meisa/meisaback/adminmeisa/assets/components/backcolum/addColu.php", 
        type: 'post',
        data: Form,
        processData: false,
        contentType:false,
                        success:function(response){
                            Swal.fire({
                            icon: 'success',
                            title: 'Columna Agregada',
                            confirmButtonColor: '#a20c19',
                            text: 'Guardaste una Columna, da un clic en "Seguir"',
                            confirmButtonText:
                                '<a class="text-white" href="http://localhost/meisa/meisaback/adminmeisa/Begin/Columns">SEGUIR</a> '
                            })
                        }
    });
}
/*EDIT COLUMN*/
function EdiatarColu(datos){
    d=datos.split('||');
    $('#idbanner').val(d[0]);
    $('#prioridadrdit').val(d[2]);
    $('#titlerdit').val(d[3]);
    $('#contentrdit').val(d[4]);
    $('#titleengrdit').val(d[5]);
    $('#contentengrdit').val(d[6]);
}
function editColu(){
    var Form = new FormData($('#formEditCol')[0]); 
    $.ajax({
        url:"http://localhost/meisa/meisaback/adminmeisa/assets/components/backcolum/editColGr.php", 
        type: 'post',
        data: Form,
        processData: false,
        contentType:false,
        success:function(response){
            Swal.fire({
            icon: 'success',
            title: 'Columna Actualizada',
            confirmButtonColor: '#a20c19',
            text: 'Editaste una Columna, da un clic en "Seguir"',
            confirmButtonText:
                '<a class="text-white" href="http://localhost/meisa/meisaback/adminmeisa/Begin/Columns">SEGUIR</a> '
            })
        }
    });
}
/*DELETE COLUMNS ENG SiNoColumn*/
function SiNoColumn(id){
	alertify.confirm('Eliminar Datos', '¿Esta seguro de eliminar este columna?', 
            function(){ deleteCol(id) }
        , function(){ alertify.error('Se cancelo')});
}
function deleteCol(id){
cadena="id=" + id;
    $.ajax({
        type:"POST",
        url:"http://localhost/meisa/meisaback/adminmeisa/assets/components/backcolum/deleteCol.php",
        data:cadena,
        success:function(response){
            Swal.fire({
            icon: 'success',
            title: 'Columna eliminado',
            confirmButtonColor: '#a20c19',
            text: 'Eliminaste una Columna, da un clic en "Seguir"',
            confirmButtonText:
                '<a class="text-white" href="http://localhost/meisa/meisaback/adminmeisa/Begin/Columns">SEGUIR</a> '
            })
        }
       
    });
}
/*TITLES MANIOBRA*/
function deletemani(id){
	alertify.confirm('Eliminar Datos', '¿Esta seguro de eliminar este post?', 
            function(){ deletemaniob(id) }
        , function(){ alertify.error('Se cancelo')});
}
function deletemaniob(id){
cadena="id=" + id;
    $.ajax({
        type:"POST",
        url:"http://localhost/meisa/meisaback/adminmeisa/assets/components/backmani/deletePost.php",
        data:cadena,
        success:function(response){
            Swal.fire({
            icon: 'success',
            title: 'Post eliminado',
            confirmButtonColor: '#a20c19',
            text: 'ELiminaste un Post, da un clic en "Seguir"',
            confirmButtonText:
                '<a class="text-white" href="http://localhost/meisa/meisaback/adminmeisa/Maniobra/Content">SEGUIR</a> '
            })
        }
       
    });
}
/*ADD IMG EXTRA*/
function addImgx(){
    var Form = new FormData($('#formImg')[0]); 
    $.ajax({
        url:"http://localhost/meisa/meisaback/adminmeisa/assets/components/backmani/addImgex.php", 
        type: 'post',
        data: Form,
        processData: false,
        contentType:false,
                        success:function(response){
                            Swal.fire({
                            icon: 'success',
                            title: 'Imagen Agregada',
                            confirmButtonColor: '#a20c19',
                            text: 'Guardaste una Imagen, da un clic en "Seguir"',
                            confirmButtonText:
                                '<a class="text-white" href="http://localhost/meisa/meisaback/adminmeisa/Maniobra/Content">SEGUIR</a> '
                            })
                        }
    });
}
/*EDIT IMG EXTRA*/
function EdiatarImg(datos){
    d=datos.split('||');
    $('#idimgx').val(d[0]);
    $('#seo_extraedit').val(d[2]);
}
function editImgt(){
    var Form = new FormData($('#formEditImg')[0]); 
    $.ajax({
        url:"http://localhost/meisa/meisaback/adminmeisa/assets/components/backmani/editExt.php", 
        type: 'post',
        data: Form,
        processData: false,
        contentType:false,
        success:function(response){
            Swal.fire({
            icon: 'success',
            title: 'Imagen Actualizada',
            confirmButtonColor: '#a20c19',
            text: 'Editaste una Columna, da un clic en "Seguir"',
            confirmButtonText:
                '<a class="text-white" href="http://localhost/meisa/meisaback/adminmeisa/Maniobra/Content">SEGUIR</a> '
            })
        }
    });
}
/*DELETE IMG EXTRA*/
function SiNoImg(id){
	alertify.confirm('Eliminar Datos', '¿Esta seguro de eliminar este columna?', 
            function(){ deleteImgtx(id) }
        , function(){ alertify.error('Se cancelo')});
}
function deleteImgtx(id){
cadena="id=" + id;
    $.ajax({
        type:"POST",
        url:"http://localhost/meisa/meisaback/adminmeisa/assets/components/backmani/deleteImg.php",
        data:cadena,
        success:function(response){
            Swal.fire({
            icon: 'success',
            title: 'Imagen eliminado',
            confirmButtonColor: '#a20c19',
            text: 'Eliminaste una Imagen, da un clic en "Seguir"',
            confirmButtonText:
                '<a class="text-white" href="http://localhost/meisa/meisaback/adminmeisa/Maniobra/Content">SEGUIR</a> '
            })
        }
       
    });
}
/*TITLES RENTAINF*/
function deleterent(id){
	alertify.confirm('Eliminar Datos', '¿Esta seguro de eliminar este post?', 
            function(){ deleterentaequip(id) }
        , function(){ alertify.error('Se cancelo')});
}
function deleterentaequip(id){
cadena="id=" + id;
    $.ajax({
        type:"POST",
        url:"http://localhost/meisa/meisaback/adminmeisa/assets/components/backrenta/deletePost.php",
        data:cadena,
        success:function(response){
            Swal.fire({
            icon: 'success',
            title: 'Post eliminado',
            confirmButtonColor: '#a20c19',
            text: 'ELiminaste un Post, da un clic en "Seguir"',
            confirmButtonText:
                '<a class="text-white" href="http://localhost/meisa/meisaback/adminmeisa/RentaInf/Content">SEGUIR</a> '
            })
        }
       
    });
}
/*ADD IMG RENTAINF*/
function addImgColumtwoo(){
    var Form = new FormData($('#formBannertwoo')[0]); 
    $.ajax({
        url:"http://localhost/meisa/meisaback/adminmeisa/assets/components/backrenta/addImgtwo.php", 
        type: 'post',
        data: Form,
        processData: false,
        contentType:false,
                        success:function(response){
                            Swal.fire({
                            icon: 'success',
                            title: 'Imagen Agregada',
                            confirmButtonColor: '#a20c19',
                            text: 'Guardaste una Imagen, da un clic en "Seguir"',
                            confirmButtonText:
                                '<a class="text-white" href="http://localhost/meisa/meisaback/adminmeisa/RentaInf/Content">SEGUIR</a> '
                            })
                        }
    });
}
/*EDIT IMG RENTAINF*/
function EdiatarColutwoo(datos){
    d=datos.split('||');
    $('#idbanner').val(d[0]);
    $('#prioridadrdit').val(d[2]);
    $('#titlerdit').val(d[3]);
    $('#titleengrdit').val(d[4]);
    $('#contentrdit').val(d[5]);
    $('#contentengrdit').val(d[6]);
}
function editImgColutwoo(){
    var Form = new FormData($('#formEditColtwoimo')[0]); 
    $.ajax({
        url:"http://localhost/meisa/meisaback/adminmeisa/assets/components/backrenta/editExt.php", 
        type: 'post',
        data: Form,
        processData: false,
        contentType:false,
        success:function(response){
            Swal.fire({
            icon: 'success',
            title: 'Imagen Actualizada',
            confirmButtonColor: '#a20c19',
            text: 'Editaste una Columna, da un clic en "Seguir"',
            confirmButtonText:
                '<a class="text-white" href="http://localhost/meisa/meisaback/adminmeisa/RentaInf/Content">SEGUIR</a> '
            })
        }
    });
}
/*DELETE IMG RENTAINF*/
function SiNoColumntwo(id){
	alertify.confirm('Eliminar Datos', '¿Esta seguro de eliminar este columna?', 
            function(){ deleteColtwo(id) }
        , function(){ alertify.error('Se cancelo')});
}
function deleteColtwo(id){
cadena="id=" + id;
    $.ajax({
        type:"POST",
        url:"http://localhost/meisa/meisaback/adminmeisa/assets/components/backrenta/deleteImg.php",
        data:cadena,
        success:function(response){
            Swal.fire({
            icon: 'success',
            title: 'Columna eliminado',
            confirmButtonColor: '#a20c19',
            text: 'Eliminaste una Columna, da un clic en "Seguir"',
            confirmButtonText:
                '<a class="text-white" href="http://localhost/meisa/meisaback/adminmeisa/RentaInf/Content">SEGUIR</a> '
            })
        }
       
    });
}

/*TITLES luz*/
function deleteluz(id){
	alertify.confirm('Eliminar Datos', '¿Esta seguro de eliminar este post?', 
            function(){ deleteluzinf(id) }
        , function(){ alertify.error('Se cancelo')});
}
function deleteluzinf(id){
cadena="id=" + id;
    $.ajax({
        type:"POST",
        url:"http://localhost/meisa/meisaback/adminmeisa/assets/components/backluz/deletePost.php",
        data:cadena,
        success:function(response){
            Swal.fire({
            icon: 'success',
            title: 'Post eliminado',
            confirmButtonColor: '#a20c19',
            text: 'ELiminaste un Post, da un clic en "Seguir"',
            confirmButtonText:
                '<a class="text-white" href="http://localhost/meisa/meisaback/adminmeisa/Luzli/Content">SEGUIR</a> '
            })
        }
       
    });
}
/*ADD IMG LUZ*/
function addImgColumtwo(){
    var Form = new FormData($('#formBannertwo')[0]); 
    $.ajax({
        url:"http://localhost/meisa/meisaback/adminmeisa/assets/components/backluz/addImgtwo.php", 
        type: 'post',
        data: Form,
        processData: false,
        contentType:false,
                        success:function(response){
                            Swal.fire({
                            icon: 'success',
                            title: 'Imagen Agregada',
                            confirmButtonColor: '#a20c19',
                            text: 'Guardaste una Imagen, da un clic en "Seguir"',
                            confirmButtonText:
                                '<a class="text-white" href="http://localhost/meisa/meisaback/adminmeisa/Luzli/Content">SEGUIR</a> '
                            })
                        }
    });
}
/*EDIT IMG LUZ*/
function EdiatarColutwo(datos){
    d=datos.split('||');
    $('#idbanner').val(d[0]);
    $('#prioridadrdit').val(d[2]);
    $('#titlerdit').val(d[3]);
    $('#titleengrdit').val(d[4]);
    $('#contentrdit').val(d[5]);
    $('#contentengrdit').val(d[6]);
}
function editImgColutwo(){
    var Form = new FormData($('#formEditColtwoim')[0]); 
    $.ajax({
        url:"http://localhost/meisa/meisaback/adminmeisa/assets/components/backluz/editExt.php", 
        type: 'post',
        data: Form,
        processData: false,
        contentType:false,
        success:function(response){
            Swal.fire({
            icon: 'success',
            title: 'Imagen Actualizada',
            confirmButtonColor: '#a20c19',
            text: 'Editaste una Columna, da un clic en "Seguir"',
            confirmButtonText:
                '<a class="text-white" href="http://localhost/meisa/meisaback/adminmeisa/Luzli/Content">SEGUIR</a> '
            })
        }
    });
}
/*DELETE IMG LUZ*/
function SiNoColumntwoluz(id){
	alertify.confirm('Eliminar Datos', '¿Esta seguro de eliminar este columna?', 
            function(){ deleteColtwoluz(id) }
        , function(){ alertify.error('Se cancelo')});
}
function deleteColtwoluz(id){
cadena="id=" + id;
    $.ajax({
        type:"POST",
        url:"http://localhost/meisa/meisaback/adminmeisa/assets/components/backluz/deleteImg.php",
        data:cadena,
        success:function(response){
            Swal.fire({
            icon: 'success',
            title: 'Columna eliminado',
            confirmButtonColor: '#a20c19',
            text: 'Eliminaste una Columna, da un clic en "Seguir"',
            confirmButtonText:
                '<a class="text-white" href="http://localhost/meisa/meisaback/adminmeisa/Luzli/Content">SEGUIR</a> '
            })
        }
       
    });
}
/*EN ESTA PARTE EMPIEZA LA PARTE DEL INVENTARIO DE LAS MAQUINA*/
/*ADD COLUMNS ESP*/
function addColumn(){
    var Form = new FormData($('#formBanner')[0]); 
    $.ajax({
        url:"http://localhost/meisa/meisaback/adminmeisa/assets/components/backinve/addProd.php", 
        type: 'post',
        data: Form,
        processData: false,
        contentType:false,
                        success:function(response){
                            Swal.fire({
                            icon: 'success',
                            title: 'Columna Agregada',
                            confirmButtonColor: '#a20c19',
                            text: 'Guardaste una Columna, da un clic en "Seguir"',
                            confirmButtonText:
                                '<a class="text-white" href="http://localhost/meisa/meisaback/adminmeisa/Inventario/Ingresar">SEGUIR</a> '
                            })
                        }
    });
}
/*EDIT COLUMN*/
function EdiatarProd(datos){
    d=datos.split('||');
    $('#idbanner').val(d[0]);
    $('#itemfoto').val(d[2]);
    $('#itemmeisa').val(d[3]);
    $('#itemlote').val(d[4]);
    $('#itemcatego').val(d[5]);
    $('#itemnombre').val(d[6]);
    $('#itemventa').val(d[7]);
    $('#itemrenta').val(d[8]);
    $('#itemdesc').val(d[9]);
    $('#itemmarca').val(d[10]);
    $('#itemmodelo').val(d[11]);
    $('#itemserie').val(d[12]);
    $('#itemyear').val(d[13]);
    $('#itemcorr').val(d[14]);
    $('#itemmotor').val(d[15]);
    $('#itemcapa').val(d[15]);
    $('#itemobser').val(d[16]);
    $('#itemprecio').val(d[22]);
    $('#itemestatus').val(d[23]);
    $('#itemefbmx').val(d[24]);
    $('#itemefbequip').val(d[25]);
    $('#itemsegun').val(d[26]);
    $('#itemlink').val(d[27]);
    $('#itemercado').val(d[28]);
    $('#itemtw').val(d[29]);
    $('#itemins').val(d[30]);
    $('#itemyou').val(d[31]);
}
function editProdu(){
    var Form = new FormData($('#formEditCol')[0]); 
    $.ajax({
        url:"http://localhost/meisa/meisaback/adminmeisa/assets/components/backinve/editColGr.php", 
        type: 'post',
        data: Form,
        processData: false,
        contentType:false,
        success:function(response){
            Swal.fire({
            icon: 'success',
            title: 'Columna Actualizada',
            confirmButtonColor: '#a20c19',
            text: 'Editaste una Columna, da un clic en "Seguir"',
            confirmButtonText:
                '<a class="text-white" href="http://localhost/meisa/meisaback/adminmeisa/Inventario/Ingresar">SEGUIR</a> '
            })
        }
    });
}
/*DELETE COLUMNS ENG SiNoColumn*/
function deleteProd(id){
	alertify.confirm('Eliminar Datos', '¿Esta seguro de eliminar este columna?', 
            function(){ deleteProducto(id) }
        , function(){ alertify.error('Se cancelo')});
}
function deleteProducto(id){
cadena="id=" + id;
    $.ajax({
        type:"POST",
        url:"http://localhost/meisa/meisaback/adminmeisa/assets/components/backinve/deletePrt.php",
        data:cadena,
        success:function(response){
            Swal.fire({
            icon: 'success',
            title: 'Columna eliminado',
            confirmButtonColor: '#a20c19',
            text: 'Eliminaste una Columna, da un clic en "Seguir"',
            confirmButtonText:
                '<a class="text-white" href="http://localhost/meisa/meisaback/adminmeisa/Inventario/Ingresar">SEGUIR</a> '
            })
        }
       
    });
}
/*DELETE CATEGO*/
function deleteCatego(id){
	alertify.confirm('Eliminar Datos', '¿Esta seguro de eliminar este columna?', 
            function(){ deleteCategori(id) }
        , function(){ alertify.error('Se cancelo')});
}
function deleteCategori(id){
cadena="id=" + id;
    $.ajax({
        type:"POST",
        url:"http://localhost/meisa/meisaback/adminmeisa/assets/components/backinve/deleteCate.php",
        data:cadena,
        success:function(response){
            Swal.fire({
            icon: 'success',
            title: 'Columna eliminado',
            confirmButtonColor: '#a20c19',
            text: 'Eliminaste una Columna, da un clic en "Seguir"',
            confirmButtonText:
                '<a class="text-white" href="http://localhost/meisa/meisaback/adminmeisa/Inventario/Categories">SEGUIR</a> '
            })
        }
       
    });
}
/*EDIT COLUMN*/
function EdiatarCatego(datos){
    d=datos.split('||');
    $('#idbanner').val(d[0]);
    $('#categodit').val(d[1]);
}
function editCategor(){
    var Form = new FormData($('#formEditCol')[0]); 
    $.ajax({
        url:"http://localhost/meisa/meisaback/adminmeisa/assets/components/backinve/editCatego.php", 
        type: 'post',
        data: Form,
        processData: false,
        contentType:false,
        success:function(response){
            Swal.fire({
            icon: 'success',
            title: 'Columna Actualizada',
            confirmButtonColor: '#a20c19',
            text: 'Editaste una Columna, da un clic en "Seguir"',
            confirmButtonText:
                '<a class="text-white" href="http://localhost/meisa/meisaback/adminmeisa/Inventario/Categories">SEGUIR</a> '
            })
        }
    });
}
/*ADD COLUMNS ESP*/
function addCat(){
    var Form = new FormData($('#formBanner')[0]); 
    $.ajax({
        url:"http://localhost/meisa/meisaback/adminmeisa/assets/components/backinve/addCategories.php", 
        type: 'post',
        data: Form,
        processData: false,
        contentType:false,
                        success:function(response){
                            Swal.fire({
                            icon: 'success',
                            title: 'Columna Agregada',
                            confirmButtonColor: '#a20c19',
                            text: 'Guardaste una Columna, da un clic en "Seguir"',
                            confirmButtonText:
                                '<a class="text-white" href="http://localhost/meisa/meisaback/adminmeisa/Inventario/Categories">SEGUIR</a> '
                            })
                        }
    });
}
/*Img of Ventas*/
function addImgvent(){
    var Form = new FormData($('#formImgVentas')[0]); 
    $.ajax({
        url:"http://localhost/meisa/meisaback/adminmeisa/assets/components/backinve/addImgvt.php", 
        type: 'post',
        data: Form,
        processData: false,
        contentType:false,
                        success:function(response){
                            Swal.fire({
                            icon: 'success',
                            title: 'Imagen Agregada',
                            confirmButtonColor: '#a20c19',
                            text: 'Guardaste una Imagen, da un clic en "Seguir"',
                            confirmButtonText:
                                '<a class="text-white" href="http://localhost/meisa/meisaback/adminmeisa/Inventario/NewImage">SEGUIR</a> '
                            })
                        }
    });
}
/*editar banner*/
function verEdiatarImgvent(datos){
    d=datos.split('||');
    $('#idbanner').val(d[0]);
    $('#previewBanerEdit').append('<img width="150px" src="'+(d[1])+'" alt="BANNER ASAVE"/>');
    $('#prioridadEdit').val(d[2]);
    $('#mensajeEdita').val(d[3]);
    $('#mensajeEditeng').val(d[3]);
    $('#seo').val(d[4]);
}
function editImgVEnt(){
    var Form = new FormData($('#formImgVentEdit')[0]); 
    $.ajax({
        url:"http://localhost/meisa/meisaback/adminmeisa/assets/components/backinve/editImgventas.php", 
        type: 'post',
        data: Form,
        processData: false,
        contentType:false,
        success:function(response){
            Swal.fire({
            icon: 'success',
            title: 'Imagen Actualizada',
            confirmButtonColor: '#a20c19',
            text: 'Editaste una Imagen, da un clic en "Seguir"',
            confirmButtonText:
                '<a class="text-white" href="http://localhost/meisa/meisaback/adminmeisa/Inventario/NewImage">SEGUIR</a> '
            })
        }
    });
}
/*eliminar banner*/
function preguntarImgventa(id){
	alertify.confirm('Eliminar Datos', '¿Esta seguro de eliminar esta Imagen?', 
            function(){ eliminarImgvent(id) }
        , function(){ alertify.error('Se cancelo')});
}
function eliminarImgvent(id){
cadena="id=" + id;
    $.ajax({
        type:"POST",
        url:"http://localhost/meisa/meisaback/adminmeisa/assets/components/backinve/deleteimgvt.php",
        data:cadena,
        success:function(response){
            Swal.fire({
            icon: 'success',
            title: 'Imagen eliminada',
            confirmButtonColor: '#a20c19',
            text: 'Eliminaste una Imagen, da un clic en "Seguir"',
            confirmButtonText:
                '<a class="text-white" href="http://localhost/meisa/meisaback/adminmeisa/Inventario/NewImage">SEGUIR</a> '
            })
        }
       
    });
}
/*END OF BANNERS*/