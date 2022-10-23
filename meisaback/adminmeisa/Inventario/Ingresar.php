<?php
session_start();
    if (isset($_SESSION['identificador'])){
        $usuario = $_SESSION['identificador'];
    }else{
 header('Location: ../../index.php');
     die() ;
 }
    $inactividad = 8255;
    if(isset($_SESSION["timeout"])){
        $sessionTTL = time() - $_SESSION["timeout"];
        if($sessionTTL > $inactividad){
            session_destroy();
            header("Location: ../../index.php");
        }
    }
    $_SESSION["timeout"] = time();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Meisa MX - Columns</title>
    <link href="../assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <link href="../assets/css//sb-admin-2.css" rel="stylesheet">
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css"/>
    <!-- Default theme -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/default.min.css"/>
    <!-- Semantic UI theme -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/semantic.min.css"/>
    <!-- Bootstrap theme -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/bootstrap.min.css"/>
</head>
<body id="page-top">
    <div id="wrapper">
        <!-- Sidebar -->
        <?php include("../assets/components/ui/sidebar.php"); ?>
        <!-- End of Sidebar -->
        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">
                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light box-sh-meisa bg-meisa topbar mb-4 static-top shadow">
                <?php include("../assets/components/ui/nav.php"); ?>
                </nav>
                <!-- End of Topbar -->
                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-meisa-red">Dashboard for the Component "Four Columns"</h1>
                        <button class="btn btn-meisa" data-toggle="modal" data-target="#modalColumn"><i class="fas fa-plus"></i> Agregar Equipo</button>
                    </div>
                    <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr class="text-center">
                                               
                                                <th>Categoria Español</th>
                                                <th>Nombre</th>
                                                <th>Marca</th>
                                                <th>Modelo</th>
                                                <th>Observaciones</th>
                                                <th>Estatus</th>
                                                <th>Eliminar</th>
                                                <th>Editar</th>
                                                
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr class="text-center">
                                               
                                                <th>Categoria Español</th>
                                                <th>Nombre</th>
                                                <th>Marca</th>
                                                <th>Modelo</th>
                                                <th>Observaciones</th>
                                                <th>Estatus</th>
                                                <th>Eliminar</th>
                                                <th>Editar</th>
                                                
                                            </tr>
                                        </tfoot>
                                        <?php
                                        include '../assets/components/backend/conexion.php';
                                        $sql = "SELECT inve_id,inve_seguridad,inve_itemfoto,inve_itemmeisa,inve_lote,
                                        inve_venre,inve_renve,inve_catego,inve_category,inve_nombre,inve_nombreingles,
                                        inve_desc,inve_marca,inve_modelo,inve_serie,inve_year,inve_corriente,inve_motor,
                                        inve_capacidad,inve_observaciones,inve_precio,inve_estatus,
                                        inve_fbmeisamex,inve_fbmeisaequip,inve_segunda,inve_linke,inve_mercado,inve_tw,inve_ins,inve_youtube
                                        FROM inventario ORDER BY inve_id ASC"; 
                                        $query = $mbd -> prepare($sql); 
                                        $query -> execute(); 
                                        $results = $query -> fetchAll(PDO::FETCH_OBJ); 
                                            if($query -> rowCount() > 0){ 
                                                foreach($results as $result) { 
                                                    $datos = $result -> inve_seguridad."||".
                                                    $result -> inve_itemfoto."||".
                                                    $result -> inve_itemmeisa."||".
                                                    $result -> inve_lote."||".
                                                    $result -> inve_venre."||".
                                                    $result -> inve_renve."||".
                                                    $result -> inve_catego."||".
                                                    $result -> inve_category."||".
                                                    $result -> inve_nombre."||".
                                                    $result -> inve_nombreingles."||".
                                                    $result -> inve_desc."||".
                                                    $result -> inve_marca."||".  
                                                    $result -> inve_modelo."||".
                                                    $result -> inve_serie."||".
                                                    $result -> inve_year."||".
                                                    $result -> inve_corriente."||".
                                                    $result -> inve_motor."||".
                                                    $result -> inve_capacidad."||".
                                                    $result -> inve_observaciones."||".
                                                    $result -> inve_precio."||".
                                                    $result -> inve_estatus."||". 
                                                    $result -> inve_fbmeisamex."||".
                                                    $result -> inve_fbmeisaequip."||".
                                                    $result -> inve_segunda."||".
                                                    $result -> inve_linke."||".
                                                    $result -> inve_mercado."||".
                                                    $result -> inve_tw."||".
                                                    $result -> inve_ins."||".
                                                    $result -> inve_youtube;
                                                ?>
                                        <tr class="text-center">
                                            <td><?php echo $result -> inve_catego; ?></td>
                                            <td><?php echo $result -> inve_nombre; ?></td>
                                            <td><?php echo $result -> inve_marca; ?></td>
                                            <td><?php echo $result -> inve_modelo; ?></td>
                                            <td><?php echo $result -> inve_observaciones; ?></td>
                                            <td class="<?php echo $result -> inve_estatus; ?>"><?php echo $result -> inve_estatus; ?></td>
                                            <td><button class="btn btn-meisa" type="button" onclick="deleteProd('<?php echo $result -> inve_seguridad; ?>')"><i class="fas fa-trash"></i></button></td>
                                            <td><button class="btn btn-warning" type="button" data-toggle="modal" data-target="#modalColuEditarprod" onclick="EditProdin('<?php echo $datos ?>')"><i class="fas fa-edit"></i></button></td>
                                            <?php
                                                    }
                                                }
                                            ?>
                                        <tbody>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                </div>
            </div>
            <!-- Footer -->
            <?php include("../assets/components/ui/footer.php"); ?>
            <!-- End of Footer -->
        </div>
    </div>
    <?php include("../assets/components/ui/modal.php"); ?>
    <!-- Bootstrap core JavaScript-->
    <!--Modal de agregar-->
    <div class="modal fade" id="modalColumn" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl modal-dialog-scrollable" role="document">
            <div class="modal-content">
            <div class="modal-header bg-meisaa">
                <h5 class="modal-title text-light" id="exampleModalLabel">Ingresar Nuevo Producto</h5>
                <button type="button" class="close text-light" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form class="formBanner" id="formBanner"  method="POST" enctype="multipart/form-data">
                    <div class="form-row">
                        <!--Itemfoto-->
                        <div class="form-group col-md-4">
                            <label class="text-meisa str_meisa" id="itmfot">Item Fotografico</label>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <button class="btn btn-meisa text-white dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false">¿Este Item Aplica?</button>
                                    <div class="dropdown-menu bg-meisaa">
                                        <p class="dropdown-item" id="not">No Aplica</p>
                                        <p class="dropdown-item" id="nat">Si Aplica</p>
                                    </div>
                                </div>
                                <input type="text" class="form-control" name="itemfoto" id="itemfoto" >
                            </div>
                        </div>
                        <!--Item Meisa-->
                        <div class="form-group col-md-4">
                            <label class="text-meisa str_meisa" id="itmmei">Item Meisa</label>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <button class="btn btn-meisa text-white dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false">¿Este Item Aplica?</button>
                                    <div class="dropdown-menu bg-meisaa">
                                        <p class="dropdown-item" id="mei">No Aplica</p>
                                        <p class="dropdown-item" id="mse">Si Aplica</p>
                                    </div>
                                </div>
                                <input type="text" class="form-control" name="itemmeisa" id="itemmeisa" >
                            </div>
                        </div>
                        <!--Item Lote-->
                        <div class="form-group col-md-4">
                            <label class="text-meisa str_meisa" id="itlot">Item Lote</label>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <button class="btn btn-meisa text-white dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false">¿Este Item Aplica?</button>
                                    <div class="dropdown-menu bg-meisaa">
                                        <p class="dropdown-item" id="lot">No Aplica</p>
                                        <p class="dropdown-item" id="lte">Si Aplica</p>
                                    </div>
                                </div>
                                <input type="text" class="form-control" name="itemlote" id="itemlote" >
                            </div>
                        </div>
                    </div>
                     <!--Modal sepa-->
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label class="text-meisa str_meisa">Categoría en Español</label>
                            <select class="form-control" name="itemcatego" id="itemcatego">
                                          <option selected >Elije una categoria es español</option>
                                          <?php
                                             $conexion=mysqli_connect('localhost','root','','u557675164_titulacion');
                                             $sql="SELECT id,name FROM categoriainven";
                                             $result=mysqli_query($conexion,$sql);
                                             while ($ver=mysqli_fetch_row($result)) {?>
                                          <option value="<?php echo $ver[1] ?>"><?php echo $ver[1] ?></option>
                                          <?php    }?>
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label class="text-meisa str_meisa">Categoreía en Inglés</label>
                            <select class="form-control" name="itemcategory" id="itemcategory">
                                          <option selected >Elije una categoria inglés</option>
                                          <?php
                                             $conexion=mysqli_connect('localhost','root','','u557675164_titulacion');
                                             $sql="SELECT id,nameingles FROM categoriainven";
                                             $result=mysqli_query($conexion,$sql);
                                             while ($ver=mysqli_fetch_row($result)) {?>
                                          <option value="<?php echo $ver[1] ?>"><?php echo $ver[1] ?></option>
                                          <?php    }?>
                            </select>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label class="text-meisa str_meisa">Nombre en Español</label>
                            <input class="form-control" type="text" placeholder="Nombre en Español" name="itemnombre" id="itemnombre" requiered>
                        </div>
                        <div class="form-group col-md-6">
                            <label class="text-meisa str_meisa">Nombre en Inglés</label>
                            <input class="form-control" type="text" placeholder="Nombre en Inglés" name="itemnombrein" id="itemnombrein" requiered>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label class="text-meisa str_meisa">¿El Producto esta en Venta?</label>
                            <select class="form-control" name="itemventa" id="itemventa">
                                <option selected >Elije el estatus</option>
                                <option value="Si">Si</option>
                                <option value="No">No</option>
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label class="text-meisa str_meisa">¿El Producto esta en Renta?</label>
                            <select class="form-control" name="itemrenta" id="itemrenta">
                                <option selected >Elije el estatus</option>
                                <option value="Si">Si</option>
                                <option value="No">No</option>
                            </select>
                        </div>
                    </div>
                     <!--Modal sepa-->
                    <div class="form-group">
                            <label class="text-meisa str_meisa" id="descipcion">Descripción del Producto</label>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <button class="btn btn-meisa text-white dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false">¿La Descripcion Aplica?</button>
                                    <div class="dropdown-menu bg-meisaa">
                                        <p class="dropdown-item" id="d">No Aplica</p>
                                        <p class="dropdown-item" id="proddes">Si Aplica</p>
                                    </div>
                                </div>
                                <input type="text" class="form-control" name="itemdesc" id="itemdesc"></input>
                            </div>
                        </div>  
                     <!--Modal sepa-->
                    <div class="form-row">
                        <!--Marca del Producto-->
                        <div class="form-group col-md-6">
                            <label class="text-meisa str_meisa" id="modpr">Marca del Producto</label>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <button class="btn btn-meisa text-white dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false">Marca del Aplica?</button>
                                    <div class="dropdown-menu bg-meisaa">
                                        <p class="dropdown-item" id="mrp">No Aplica</p>
                                        <p class="dropdown-item" id="mar">Si Aplica</p>
                                    </div>
                                </div>
                                <input type="text" class="form-control" name="itemmarca" id="itemmarca" >
                            </div>
                        </div>
                         <!--Modelo del Producto-->
                         <div class="form-group col-md-6">
                            <label class="text-meisa str_meisa" id="mop">Modelo del Producto</label>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <button class="btn btn-meisa text-white dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false">¿Modelo del Producto Aplica?</button>
                                    <div class="dropdown-menu bg-meisaa">
                                        <p class="dropdown-item" id="mdp">No Aplica</p>
                                        <p class="dropdown-item" id="mpp">Si Aplica</p>
                                    </div>
                                </div>
                                <input type="text" class="form-control" name="itemmodelo" id="itemmodelo" >
                            </div>
                        </div>
                    </div>     
                     <!--Modal sepa-->
                     <div class="form-row">
                        <!--Número de Serie-->
                        <div class="form-group col-md-4">
                            <label class="text-meisa str_meisa" id="numer">Número de Serie</label>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <button class="btn btn-meisa text-white dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false">¿Número de Serie Aplica?</button>
                                    <div class="dropdown-menu bg-meisaa">
                                        <p class="dropdown-item" id="nus">No Aplica</p>
                                        <p class="dropdown-item" id="nds">Si Aplica</p>
                                    </div>
                                </div>
                                <input type="text" class="form-control" name="itemserie" id="itemserie" >
                            </div>
                        </div>
                        <!--Año del Producto-->
                        <div class="form-group col-md-4">
                            <label class="text-meisa str_meisa" id="anp">Año del Producto</label>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <button class="btn btn-meisa text-white dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false">¿Año del Producto Aplica?</button>
                                    <div class="dropdown-menu bg-meisaa">
                                        <p class="dropdown-item" id="adpy">No Aplica</p>
                                        <p class="dropdown-item" id="ydpa">Si Aplica</p>
                                    </div>
                                </div>
                                <input type="text" class="form-control" name="itemyear" id="itemyear" >
                            </div>
                        </div>
                         <!--Correiente del Producto-->
                         <div class="form-group col-md-4">
                            <label class="text-meisa str_meisa" id="corr">Correiente del Producto</label>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <button class="btn btn-meisa text-white dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false">¿Correiente del Producto Aplica?</button>
                                    <div class="dropdown-menu bg-meisaa">
                                        <p class="dropdown-item" id="corre">No Aplica</p>
                                        <p class="dropdown-item" id="crrp">Si Aplica</p>
                                    </div>
                                </div>
                                <input type="text" class="form-control" name="itemcorr" id="itemcorr" >
                            </div>
                        </div>
                    </div>     
                       <!--Modal sepa-->
                    <div class="form-row">
                        <!--Motor del Producto-->
                        <div class="form-group col-md-6">
                            <label class="text-meisa str_meisa" id="mtp">Motor del Producto</label>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <button class="btn btn-meisa text-white dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false">¿Motor del Producto Aplica?</button>
                                    <div class="dropdown-menu bg-meisaa">
                                        <p class="dropdown-item" id="pmt">No Aplica</p>
                                        <p class="dropdown-item" id="tmp">Si Aplica</p>
                                    </div>
                                </div>
                                <input type="text" class="form-control" name="itemmotor" id="itemmotor" >
                            </div>
                        </div>
                        <!--Capacidad del Producto-->
                        <div class="form-group col-md-6">
                            <label class="text-meisa str_meisa" id="cap">Capacidad del Producto</label>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <button class="btn btn-meisa text-white dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false">¿La Capacidad Aplica?</button>
                                    <div class="dropdown-menu bg-meisaa">
                                        <p class="dropdown-item" id="capi">No Aplica</p>
                                        <p class="dropdown-item" id="capa">Si Aplica</p>
                                    </div>
                                </div>
                                <input type="text" class="form-control" name="itemcapa" id="itemcapa" >
                            </div>
                        </div>
                    </div>                
                    <!--Modal sepa-->
                        <!--Observaciones del Producto-->
                        <div class="form-group">
                            <label class="text-meisa str_meisa" id="odp">Observaciones del Producto</label>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <button class="btn btn-meisa text-white dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false">¿Las Observaciones Aplican?</button>
                                    <div class="dropdown-menu bg-meisaa">
                                        <p class="dropdown-item" id="obdp">No Aplica</p>
                                        <p class="dropdown-item" id="pod">Si Aplica</p>
                                    </div>
                                </div>
                                <input type="text" class="form-control" name="itemobser" id="itemobser" >
                            </div>
                        </div>
                     <!--Modal sepa-->
                      <!--Imagen del Producto-->
                     <div class="form-row">
                        <div class="form-group col-md-6">
                            <label class="text-meisa str_meisa">Imagen Principal</label>
                            <div class="custom-file">
   				                <label for="exampleFormControlFile1">Elige tu imagen</label>
                                <input type="file" class="form-control-file" name="imgBanner" />
                            </div>
                        </div>
                     </div>
                    <!--Modal sepa-->
                    <div class="form-row">
                        <!--Precio del Producto-->
                        <div class="form-group col-md-6">
                            <label class="text-meisa str_meisa" id="prec">Precio del Producto</label>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <button class="btn btn-meisa text-white dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false">¿El Precio Aplica?</button>
                                    <div class="dropdown-menu bg-meisaa">
                                        <p class="dropdown-item" id="prep">No Aplica</p>
                                        <p class="dropdown-item" id="preci">Si Aplica</p>
                                    </div>
                                </div>
                                <input type="number" class="form-control" name="itemprecio" id="itemprecio" >
                            </div>
                        </div>
                        <!--¿El Producto esta a la Venta o D-->
                        <div class="form-group col-md-6">
                            <label class="text-meisa str_meisa">¿El Producto esta Vendido o Disponible?</label>
                            <select class="form-control" name="itemestatus" id="itemestatus">
                                <option selected >Elije el estatus</option>
                                <option value="Vendido">Vendido</option>
                                <option value="Disponible">Disponible</option>
                            </select>
                        </div>
                    </div>   
                    <!--Modal sepa-->
                    <div class="form-row">
                        <div class="form-group col-md-3">
                            <label class="text-meisa str_meisa">¿Existe el FaceBook?</label>
                            <select class="form-control" name="itemefbmx" id="itemefbmx">
                                <option selected >Elije el estatus</option>
                                <option value="Existe">Existe</option>
                                <option value="N/A">No Aplica</option>
                            </select>
                        </div>
                        <div class="form-group col-md-3">
                            <label class="text-meisa str_meisa">¿Hay Publicación en FB?</label>
                            <select class="form-control" name="itemefbequip" id="itemefbequip">
                                <option selected >Elije el estatus</option>
                                <option value="Existe">Existe</option>
                                <option value="N/A">No Aplica</option>
                            </select>
                        </div>
                        <div class="form-group col-md-3">
                            <label class="text-meisa str_meisa">¿Existe en Segunda?</label>
                            <select class="form-control" name="itemsegun" id="itemsegun">
                                <option selected >Elije el estatus</option>
                                <option value="Existe">Existe</option>
                                <option value="N/A">No Aplica</option>
                            </select>
                        </div>
                        <div class="form-group col-md-3">
                            <label class="text-meisa str_meisa">¿Existe en LinkedIn?</label>
                            <select class="form-control" name="itemlink" id="itemlink">
                                <option selected >Elije el estatus</option>
                                <option value="Existe">Existe</option>
                                <option value="N/A">No Aplica</option>
                            </select>
                        </div>
                    </div>     
                    <!--Modal sepa-->
                    <div class="form-row">
                        <div class="form-group col-md-3">
                            <label class="text-meisa str_meisa">¿Existe en Mercado Libre?</label>
                            <select class="form-control" name="itemercado" id="itemercado">
                                <option selected >Elije el estatus</option>
                                <option value="Existe">Existe</option>
                                <option value="N/A">No Aplica</option>
                            </select>
                        </div>
                        <div class="form-group col-md-3">
                            <label class="text-meisa str_meisa">¿Existe en Twitter?</label>
                            <select class="form-control" name="itemtw" id="itemtw">
                                <option selected >Elije el estatus</option>
                                <option value="Existe">Existe</option>
                                <option value="N/A">No Aplica</option>
                            </select>
                        </div>

                        <div class="form-group col-md-3">
                            <label class="text-meisa str_meisa">¿Existe en Instagram?</label>
                            <select class="form-control" name="itemins" id="itemins">
                                <option selected >Elije el estatus</option>
                                <option value="Existe">Existe</option>
                                <option value="N/A">No Aplica</option>
                            </select>
                        </div>
                    </div>    
                    <div class="form-group">
                        <!--¿Existe en Youtube?-->
                        <div class="form-group">
                            <label class="text-meisa str_meisa" id="vide">¿Existe en Youtube?</label>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <button class="btn btn-meisa text-white dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false">¿Esta dato Aplica?</button>
                                    <div class="dropdown-menu bg-meisaa">
                                        <p class="dropdown-item" id="you">No Aplica</p>
                                        <p class="dropdown-item" id="tube">Si Aplica</p>
                                    </div>
                                </div>
                                <input type="text" class="form-control" name="itemyou" id="itemyou" >
                            </div>
                        </div>
                    </div>    
                </form>
            </div>
            <div class="modal-footer">
                <button type="submit" id="btnAddColum" class="btn btn-meisa">Guardar el Producto</button>
            </div>
            </div>
        </div>
    </div>
    <!--Modal de editar-->
    <div class="modal fade" id="modalColuEditarprod" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content">
            <div class="modal-header bg-warning">
                <h5 class="modal-title text-meisa" id="exampleModalLabel">Editar Columna Ingles/Español</h5>
                <button type="button" class="close text-light" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true text-meisa">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form class="formBanner" id="formEditpr"  method="POST" enctype="multipart/form-data">
                <input type="hidden" id="seg" name="seg">
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label class="text-meisa">Item Fotografico</label>
                            <input class="form-control" type="text" placeholder="Item Fotografico" name="itemfotor" id="itemfotor">
                        </div>
                        <div class="form-group col-md-4">
                            <label class="text-meisa">Item Meisa</label>
                            <input class="form-control" type="text" placeholder="Item Meisa" name="itemmeisar" id="itemmeisar">
                        </div>
                        <div class="form-group col-md-4">
                            <label class="text-meisa">Item Lote</label>
                            <input class="form-control" type="text" placeholder="Item Lote" name="itemloter" id="itemloter">
                        </div>
                    </div>
                     <!--Modal sepa-->
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label class="text-meisa">Categoría en Español</label>
                            <select class="form-control" name="itemcategor" id="itemcategor">
                                          <option selected >Elije una categoria es español</option>
                                          <?php
                                             $conexion=mysqli_connect('localhost','root','','u557675164_titulacion');
                                             $sql="SELECT id,name FROM categoriainven";
                                             $result=mysqli_query($conexion,$sql);
                                             while ($ver=mysqli_fetch_row($result)) {?>
                                          <option value="<?php echo $ver[1] ?>"><?php echo $ver[1] ?></option>
                                          <?php    }?>
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label class="text-meisa">Categoreía en Inglés</label>
                            <select class="form-control" name="itemcategoryr" id="itemcategoryr">
                                          <option selected >Elije una categoria inglés</option>
                                          <?php
                                             $conexion=mysqli_connect('localhost','root','','u557675164_titulacion');
                                             $sql="SELECT id,nameingles FROM categoriainven";
                                             $result=mysqli_query($conexion,$sql);
                                             while ($ver=mysqli_fetch_row($result)) {?>
                                          <option value="<?php echo $ver[1] ?>"><?php echo $ver[1] ?></option>
                                          <?php    }?>
                            </select>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label class="text-meisa">Nombre en Español</label>
                            <input class="form-control" type="text" placeholder="Nombre en Español" name="itemnombrer" id="itemnombrer" requiered>
                        </div>
                        <div class="form-group col-md-6">
                            <label class="text-meisa">Nombre en Inglés</label>
                            <input class="form-control" type="text" placeholder="Nombre en Inglés" name="itemnombreinr" id="itemnombreinr" requiered>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label class="text-meisa">¿El Producto esta en Venta?</label>
                            <select class="form-control" name="itemventar" id="itemventar">
                                <option selected >Elije el estatus</option>
                                <option value="Si">Si</option>
                                <option value="No">No</option>
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label class="text-meisa">¿El Producto esta en Renta?</label>
                            <select class="form-control" name="itemrentar" id="itemrentar">
                                <option selected >Elije el estatus</option>
                                <option value="Si">Si</option>
                                <option value="No">No</option>
                            </select>
                        </div>
                    </div>
                     <!--Modal sepa-->
                    <div class="form-group">
                            <label class="text-meisa">Descripción del Producto</label>
                            <textarea class="form-control" name="itemdescr" id="itemdescr" cols="30" rows="10"></textarea>
                    </div>  
                     <!--Modal sepa-->
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label class="text-meisa">Marca del Producto</label>
                            <input class="form-control" type="text" placeholder="Marca del Producto" name="itemmarcar" id="itemmarcar" requiered>
                        </div>
                        <div class="form-group col-md-6">
                            <label class="text-meisa">Modelo del Producto</label>
                            <input class="form-control" type="text" placeholder="Modelo del Producto" name="itemmodelor" id="itemmodelor" requiered>
                        </div>
                    </div>     
                     <!--Modal sepa-->
                     <div class="form-row">
                        <div class="form-group col-md-4">
                            <label class="text-meisa">Número de Serie</label>
                            <input class="form-control" type="text" placeholder="Número de Serie" name="itemserier" id="itemserier" requiered>
                        </div>
                        <div class="form-group col-md-4">
                            <label class="text-meisa">Año del Producto</label>
                            <input class="form-control" type="text" placeholder="Ejemplo: 2022" name="itemyearr" id="itemyearr" requiered>
                        </div>
                        <div class="form-group col-md-4">
                            <label class="text-meisa">Correiente del Producto</label>
                            <input class="form-control" type="text" placeholder="Correiente del Producto" name="itemcorrr" id="itemcorrr" requiered>
                        </div>
                    </div>     
                       <!--Modal sepa-->
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label class="text-meisa">Motor del Producto</label>
                            <input class="form-control" type="text" placeholder="Motor del Producto" name="itemmotorr" id="itemmotorr" requiered>
                        </div>
                        <div class="form-group col-md-6">
                            <label class="text-meisa">Capacidad del Producto</label>
                            <input class="form-control" type="text" placeholder="Capacidad del Producto" name="itemcapar" id="itemcapar" requiered>
                        </div>
                    </div>                
                    <!--Modal sepa-->
                        <div class="form-group">
                            <label class="text-meisa">Observaciones del Producto</label>
                            <input class="form-control" type="text" placeholder="Observaciones del Producto" name="itemobserr" id="itemobserr" requiered>
                        </div>
                     <!--Modal sepa-->
                     <div class="form-row">
                        <div class="form-group col-md-3">
                            <label class="text-meisa">Imagen Principal</label>
                            <div class="custom-file">
                                    <label for="exampleFormControlFile1">Elige tu imagen</label>
                                    <input type="file" class="form-control-file" name="imgBannerr" />
                            </div>
                        </div>
                     </div>
                    
                    <!--Modal sepa-->
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label class="text-meisa">Precio del Producto</label>
                            <input class="form-control" type="text" placeholder="Ejemplo: 23456" name="itemprecior" id="itemprecior" requiered>
                        </div>
                        <div class="form-group col-md-6">
                            <label class="text-meisa">¿El Producto se Vendio o sigue Disponible?</label>
                            <select class="form-control" name="itemestatusr" id="itemestatusr">
                                <option selected >Elije el estatus</option>
                                <option value="Vendido">Vendido</option>
                                <option value="Disponible">Disponible</option>
                            </select>
                        </div>
                    </div>   
                    <!--Modal sepa-->
                    <div class="form-row">
                        <div class="form-group col-md-3">
                            <label class="text-meisa">¿Existe el FaceBook?</label>
                            <select class="form-control" name="itemefbmxr" id="itemefbmxr">
                                <option selected >Elije el estatus</option>
                                <option value="Existe">Existe</option>
                                <option value="N/A">No Aplica</option>
                            </select>
                        </div>
                        <div class="form-group col-md-3">
                            <label class="text-meisa">¿Hay Publicación en FB?</label>
                            <select class="form-control" name="itemefbequipr" id="itemefbequipr">
                                <option selected >Elije el estatus</option>
                                <option value="Existe">Existe</option>
                                <option value="N/A">No Aplica</option>
                            </select>
                        </div>

                        <div class="form-group col-md-3">
                            <label class="text-meisa">¿Existe en Segunda?</label>
                            <select class="form-control" name="itemsegunr" id="itemsegunr">
                                <option selected >Elije el estatus</option>
                                <option value="Existe">Existe</option>
                                <option value="N/A">No Aplica</option>
                            </select>
                        </div>
                        <div class="form-group col-md-3">
                            <label class="text-meisa">¿Existe en LinkedIn?</label>
                            <select class="form-control" name="itemlinkr" id="itemlinkr">
                                <option selected >Elije el estatus</option>
                                <option value="Existe">Existe</option>
                                <option value="N/A">No Aplica</option>
                            </select>
                        </div>
                    </div>     
                    <!--Modal sepa-->
                    <div class="form-row">
                        <div class="form-group col-md-3">
                            <label class="text-meisa">¿Existe en Mercado Libre?</label>
                            <select class="form-control" name="itemercador" id="itemercador">
                                <option selected >Elije el estatus</option>
                                <option value="Existe">Existe</option>
                                <option value="N/A">No Aplica</option>
                            </select>
                        </div>
                        <div class="form-group col-md-3">
                            <label class="text-meisa">¿Existe en Twitter?</label>
                            <select class="form-control" name="itemtwr" id="itemtwr">
                                <option selected >Elije el estatus</option>
                                <option value="Existe">Existe</option>
                                <option value="N/A">No Aplica</option>
                            </select>
                        </div>

                        <div class="form-group col-md-3">
                            <label class="text-meisa">¿Existe en Instagram?</label>
                            <select class="form-control" name="iteminsr" id="iteminsr">
                                <option selected >Elije el estatus</option>
                                <option value="Existe">Existe</option>
                                <option value="N/A">No Aplica</option>
                            </select>
                        </div>
                        <div class="form-group col-md-3">
                            <label class="text-meisa">¿Existe en Youtube?</label>
                            <input class="form-control" type="text" name="itemyour" id="itemyour">
                        </div>
                    </div>        
                </form>
            </div>
            <div class="modal-footer">
                <button type="submit" id="btnEditColuProd" class="btn btn-meisa">Guardar</button>
            </div>
            </div>
        </div>
    </div>
    
    <script src="../assets/vendor/jquery/jquery.min.js"></script>
    <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="../assets/js/sb-admin-2.min.js"></script>
    <script src="../assets/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="../assets/vendor/datatables/dataTables.bootstrap4.min.js"></script>
    <script src="../assets/js/demo/datatables-demo.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="../assets/components/backend/main.js"></script>
    <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>
    <script>
        $(document).ready(function(){
            $("#btnAddColum").click(function(e) {
                addColumn();
            });
            $("#btnEditColuProd").click(function(e) {
                editProduinvent();
            });
        });
    </script>
    <script src="../assets/js/apply.js"></script>
</body>

</html>