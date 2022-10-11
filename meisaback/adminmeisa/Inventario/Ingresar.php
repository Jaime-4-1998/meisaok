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
                                               
                                                <th>Categoria</th>
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
                                               
                                                <th>Categoria</th>
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
                                        $sql = "SELECT inve_id, inve_seguridad, inve_catego, inve_nombre, inve_desc, inve_marca, inve_modelo, inve_observaciones, inve_estatus
                                        FROM inventario ORDER BY inve_id ASC"; 
                                        $query = $mbd -> prepare($sql); 
                                        $query -> execute(); 
                                        $results = $query -> fetchAll(PDO::FETCH_OBJ); 
                                            if($query -> rowCount() > 0){ 
                                                foreach($results as $result) { 
                                                    $datos = $result -> inve_id."||".
                                                    $result -> inve_catego."||".
                                                    $result -> inve_nombre."||".
                                                    $result -> inve_marca."||".  
                                                    $result -> inve_modelo."||".
                                                    $result -> inve_observaciones."||".
                                                    $result -> inve_estatus; 
                                                ?>
                                        <tr class="text-center">
                                            <td><?php echo $result -> inve_catego; ?></td>
                                            <td><?php echo $result -> inve_nombre; ?></td>
                                            <td><?php echo $result -> inve_marca; ?></td>
                                            <td><?php echo $result -> inve_modelo; ?></td>
                                            <td><?php echo $result -> inve_observaciones; ?></td>
                                            <td class="<?php echo $result -> inve_estatus; ?>"><?php echo $result -> inve_estatus; ?></td>
                                            <td><button class="btn btn-meisa" type="button" onclick="deleteProd('<?php echo $result -> inve_id; ?>')"><i class="fas fa-trash"></i></button></td>
                                            <td><button class="btn btn-warning" type="button" data-toggle="modal" data-target="#modalColuEditar" onclick="EdiatarProd('<?php echo $datos ?>')"><i class="fas fa-edit"></i></button></td>
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
                        <div class="form-group col-md-4">
                            <label class="text-meisa">Item Fotografico</label>
                            <input class="form-control" type="text" placeholder="Item Fotografico" name="itemfoto" id="itemfoto">
                        </div>
                        <div class="form-group col-md-4">
                            <label class="text-meisa">Item Meisa</label>
                            <input class="form-control" type="text" placeholder="Item Meisa" name="itemmeisa" id="itemmeisa">
                        </div>
                        <div class="form-group col-md-4">
                            <label class="text-meisa">Item Lote</label>
                            <input class="form-control" type="text" placeholder="Item Lote" name="itemlote" id="itemlote">
                        </div>
                    </div>
                     <!--Modal sepa-->
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label class="text-meisa">Categoría en Español</label>
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
                            <label class="text-meisa">Categoreía en Inglés</label>
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
                            <label class="text-meisa">Nombre en Español</label>
                            <input class="form-control" type="text" placeholder="Nombre en Español" name="itemnombre" id="itemnombre" requiered>
                        </div>
                        <div class="form-group col-md-6">
                            <label class="text-meisa">Nombre en Inglés</label>
                            <input class="form-control" type="text" placeholder="Nombre en Inglés" name="itemnombrein" id="itemnombrein" requiered>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label class="text-meisa">¿El Producto esta en Venta?</label>
                            <select class="form-control" name="itemventa" id="itemventa">
                                <option selected >Elije el estatus</option>
                                <option value="Si">Si</option>
                                <option value="No">No</option>
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label class="text-meisa">¿El Producto esta en Renta?</label>
                            <select class="form-control" name="itemrenta" id="itemrenta">
                                <option selected >Elije el estatus</option>
                                <option value="Si">Si</option>
                                <option value="No">No</option>
                            </select>
                        </div>
                    </div>
                     <!--Modal sepa-->
                    <div class="form-group">
                            <label class="text-meisa">Descripción del Producto</label>
                            <textarea class="form-control" name="itemdesc" id="itemdesc" cols="30" rows="10"></textarea>
                    </div>  
                     <!--Modal sepa-->
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label class="text-meisa">Marca del Producto</label>
                            <input class="form-control" type="text" placeholder="Marca del Producto" name="itemmarca" id="itemmarca" requiered>
                        </div>
                        <div class="form-group col-md-6">
                            <label class="text-meisa">Modelo del Producto</label>
                            <input class="form-control" type="text" placeholder="Modelo del Producto" name="itemmodelo" id="itemmodelo" requiered>
                        </div>
                    </div>     
                     <!--Modal sepa-->
                     <div class="form-row">
                        <div class="form-group col-md-4">
                            <label class="text-meisa">Número de Serie</label>
                            <input class="form-control" type="text" placeholder="Número de Serie" name="itemserie" id="itemserie" requiered>
                        </div>
                        <div class="form-group col-md-4">
                            <label class="text-meisa">Año del Producto</label>
                            <input class="form-control" type="text" placeholder="Ejemplo: 2022" name="itemyear" id="itemyear" requiered>
                        </div>
                        <div class="form-group col-md-4">
                            <label class="text-meisa">Correiente del Producto</label>
                            <input class="form-control" type="text" placeholder="Correiente del Producto" name="itemcorr" id="itemcorr" requiered>
                        </div>
                    </div>     
                       <!--Modal sepa-->
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label class="text-meisa">Motor del Producto</label>
                            <input class="form-control" type="text" placeholder="Motor del Producto" name="itemmotor" id="itemmotor" requiered>
                        </div>
                        <div class="form-group col-md-6">
                            <label class="text-meisa">Capacidad del Producto</label>
                            <input class="form-control" type="text" placeholder="Capacidad del Producto" name="itemcapa" id="itemcapa" requiered>
                        </div>
                    </div>                
                    <!--Modal sepa-->
                        <div class="form-group">
                            <label class="text-meisa">Observaciones del Producto</label>
                            <input class="form-control" type="text" placeholder="Observaciones del Producto" name="itemobser" id="itemobser" requiered>
                        </div>
                     <!--Modal sepa-->
                     <div class="form-row">
                        <div class="form-group col-md-3">
                            <label class="text-meisa">Imagen Principal</label>
                            <div class="custom-file">
                                    <label for="exampleFormControlFile1">Elige tu imagen</label>
                                    <input type="file" class="form-control-file" name="imgBanner" />
                            </div>
                        </div>
                        
                     </div>
                    
                    <!--Modal sepa-->
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label class="text-meisa">Precio del Producto</label>
                            <input class="form-control" type="number" placeholder="Ejemplo: 23456" name="itemprecio" id="itemprecio" requiered>
                        </div>
                        <div class="form-group col-md-6">
                            <label class="text-meisa">¿El Producto esta a la Venta o Disponible?</label>
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
                            <label class="text-meisa">¿Existe el FaceBook?</label>
                            <select class="form-control" name="itemefbmx" id="itemefbmx">
                                <option selected >Elije el estatus</option>
                                <option value="Existe">Existe</option>
                                <option value="No Existe">No Existe</option>
                            </select>
                        </div>
                        <div class="form-group col-md-3">
                            <label class="text-meisa">¿Hay Publicación en FB?</label>
                            <select class="form-control" name="itemefbequip" id="itemefbequip">
                                <option selected >Elije el estatus</option>
                                <option value="Existe">Existe</option>
                                <option value="No Existe">No Existe</option>
                            </select>
                        </div>

                        <div class="form-group col-md-3">
                            <label class="text-meisa">¿Existe en Segunda?</label>
                            <select class="form-control" name="itemsegun" id="itemsegun">
                                <option selected >Elije el estatus</option>
                                <option value="Existe">Existe</option>
                                <option value="No Existe">No Existe</option>
                            </select>
                        </div>
                        <div class="form-group col-md-3">
                            <label class="text-meisa">¿Existe en LinkedIn?</label>
                            <select class="form-control" name="itemlink" id="itemlink">
                                <option selected >Elije el estatus</option>
                                <option value="Existe">Existe</option>
                                <option value="No Existe">No Existe</option>
                            </select>
                        </div>
                    </div>     
                    <!--Modal sepa-->
                    <div class="form-row">
                        <div class="form-group col-md-3">
                            <label class="text-meisa">¿Existe en Mercado Libre?</label>
                            <select class="form-control" name="itemercado" id="itemercado">
                                <option selected >Elije el estatus</option>
                                <option value="Existe">Existe</option>
                                <option value="No Existe">No Existe</option>
                            </select>
                        </div>
                        <div class="form-group col-md-3">
                            <label class="text-meisa">¿Existe en Twitter?</label>
                            <select class="form-control" name="itemtw" id="itemtw">
                                <option selected >Elije el estatus</option>
                                <option value="Existe">Existe</option>
                                <option value="No Existe">No Existe</option>
                            </select>
                        </div>

                        <div class="form-group col-md-3">
                            <label class="text-meisa">¿Existe en Instagram?</label>
                            <select class="form-control" name="itemins" id="itemins">
                                <option selected >Elije el estatus</option>
                                <option value="Existe">Existe</option>
                                <option value="No Existe">No Existe</option>
                            </select>
                        </div>
                        <div class="form-group col-md-3">
                            <label class="text-meisa">¿Existe en Youtube?</label>
                            <input class="form-control" type="text" name="itemyou" id="itemyou">
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
    <div class="modal fade" id="modalColuEditar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content">
            <div class="modal-header bg-warning">
                <h5 class="modal-title text-meisa" id="exampleModalLabel">Editar Columna Ingles/Español</h5>
                <button type="button" class="close text-light" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true text-meisa">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form class="formBanner" id="formEditCol"  method="POST" enctype="multipart/form-data">
                <input type="hidden" id="idbanner" name="idbanner">
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label class="text-meisa">Item Fotografico</label>
                            <input class="form-control" type="text" placeholder="Item Fotografico" name="itemfoto" id="itemfoto">
                        </div>
                        <div class="form-group col-md-4">
                            <label class="text-meisa">Item Meisa</label>
                            <input class="form-control" type="text" placeholder="Item Meisa" name="itemmeisa" id="itemmeisa">
                        </div>
                        <div class="form-group col-md-4">
                            <label class="text-meisa">Item Lote</label>
                            <input class="form-control" type="text" placeholder="Item Lote" name="itemlote" id="itemlote">
                        </div>
                    </div>
                     <!--Modal sepa-->
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label class="text-meisa">Categoría en Español</label>
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
                            <label class="text-meisa">Categoreía en Inglés</label>
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
                            <label class="text-meisa">Nombre en Español</label>
                            <input class="form-control" type="text" placeholder="Nombre en Español" name="itemnombre" id="itemnombre" requiered>
                        </div>
                        <div class="form-group col-md-6">
                            <label class="text-meisa">Nombre en Inglés</label>
                            <input class="form-control" type="text" placeholder="Nombre en Inglés" name="itemnombrein" id="itemnombrein" requiered>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label class="text-meisa">¿El Producto esta en Venta?</label>
                            <select class="form-control" name="itemventa" id="itemventa">
                                <option selected >Elije el estatus</option>
                                <option value="Si">Si</option>
                                <option value="No">No</option>
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label class="text-meisa">¿El Producto esta en Renta?</label>
                            <select class="form-control" name="itemrenta" id="itemrenta">
                                <option selected >Elije el estatus</option>
                                <option value="Si">Si</option>
                                <option value="No">No</option>
                            </select>
                        </div>
                    </div>
                     <!--Modal sepa-->
                    <div class="form-group">
                            <label class="text-meisa">Descripción del Producto</label>
                            <textarea class="form-control" name="itemdesc" id="itemdesc" cols="30" rows="10"></textarea>
                    </div>  
                     <!--Modal sepa-->
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label class="text-meisa">Marca del Producto</label>
                            <input class="form-control" type="text" placeholder="Marca del Producto" name="itemmarca" id="itemmarca" requiered>
                        </div>
                        <div class="form-group col-md-6">
                            <label class="text-meisa">Modelo del Producto</label>
                            <input class="form-control" type="text" placeholder="Modelo del Producto" name="itemmodelo" id="itemmodelo" requiered>
                        </div>
                    </div>     
                     <!--Modal sepa-->
                     <div class="form-row">
                        <div class="form-group col-md-4">
                            <label class="text-meisa">Número de Serie</label>
                            <input class="form-control" type="text" placeholder="Número de Serie" name="itemserie" id="itemserie" requiered>
                        </div>
                        <div class="form-group col-md-4">
                            <label class="text-meisa">Año del Producto</label>
                            <input class="form-control" type="text" placeholder="Ejemplo: 2022" name="itemyear" id="itemyear" requiered>
                        </div>
                        <div class="form-group col-md-4">
                            <label class="text-meisa">Correiente del Producto</label>
                            <input class="form-control" type="text" placeholder="Correiente del Producto" name="itemcorr" id="itemcorr" requiered>
                        </div>
                    </div>     
                       <!--Modal sepa-->
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label class="text-meisa">Motor del Producto</label>
                            <input class="form-control" type="text" placeholder="Motor del Producto" name="itemmotor" id="itemmotor" requiered>
                        </div>
                        <div class="form-group col-md-6">
                            <label class="text-meisa">Capacidad del Producto</label>
                            <input class="form-control" type="text" placeholder="Capacidad del Producto" name="itemcapa" id="itemcapa" requiered>
                        </div>
                    </div>                
                    <!--Modal sepa-->
                        <div class="form-group">
                            <label class="text-meisa">Observaciones del Producto</label>
                            <input class="form-control" type="text" placeholder="Observaciones del Producto" name="itemobser" id="itemobser" requiered>
                        </div>
                     <!--Modal sepa-->
                     <div class="form-row">
                        <div class="form-group col-md-3">
                            <label class="text-meisa">Imagen Principal</label>
                            <div class="custom-file">
                                    <label for="exampleFormControlFile1">Elige tu imagen</label>
                                    <input type="file" class="form-control-file" name="imgBanner" />
                            </div>
                        </div>
                     </div>
                    
                    <!--Modal sepa-->
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label class="text-meisa">Precio del Producto</label>
                            <input class="form-control" type="text" placeholder="Ejemplo: 23456" name="itemprecio" id="itemprecio" requiered>
                        </div>
                        <div class="form-group col-md-6">
                            <label class="text-meisa">¿El Producto esta a la Venta o Disponible?</label>
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
                            <label class="text-meisa">¿Existe el FaceBook?</label>
                            <select class="form-control" name="itemefbmx" id="itemefbmx">
                                <option selected >Elije el estatus</option>
                                <option value="Existe">Existe</option>
                                <option value="No Existe">No Existe</option>
                            </select>
                        </div>
                        <div class="form-group col-md-3">
                            <label class="text-meisa">¿Hay Publicación en FB?</label>
                            <select class="form-control" name="itemefbequip" id="itemefbequip">
                                <option selected >Elije el estatus</option>
                                <option value="Existe">Existe</option>
                                <option value="No Existe">No Existe</option>
                            </select>
                        </div>

                        <div class="form-group col-md-3">
                            <label class="text-meisa">¿Existe en Segunda?</label>
                            <select class="form-control" name="itemsegun" id="itemsegun">
                                <option selected >Elije el estatus</option>
                                <option value="Existe">Existe</option>
                                <option value="No Existe">No Existe</option>
                            </select>
                        </div>
                        <div class="form-group col-md-3">
                            <label class="text-meisa">¿Existe en LinkedIn?</label>
                            <select class="form-control" name="itemlink" id="itemlink">
                                <option selected >Elije el estatus</option>
                                <option value="Existe">Existe</option>
                                <option value="No Existe">No Existe</option>
                            </select>
                        </div>
                    </div>     
                    <!--Modal sepa-->
                    <div class="form-row">
                        <div class="form-group col-md-3">
                            <label class="text-meisa">¿Existe en Mercado Libre?</label>
                            <select class="form-control" name="itemercado" id="itemercado">
                                <option selected >Elije el estatus</option>
                                <option value="Existe">Existe</option>
                                <option value="No Existe">No Existe</option>
                            </select>
                        </div>
                        <div class="form-group col-md-3">
                            <label class="text-meisa">¿Existe en Twitter?</label>
                            <select class="form-control" name="itemtw" id="itemtw">
                                <option selected >Elije el estatus</option>
                                <option value="Existe">Existe</option>
                                <option value="No Existe">No Existe</option>
                            </select>
                        </div>

                        <div class="form-group col-md-3">
                            <label class="text-meisa">¿Existe en Instagram?</label>
                            <select class="form-control" name="itemins" id="itemins">
                                <option selected >Elije el estatus</option>
                                <option value="Existe">Existe</option>
                                <option value="No Existe">No Existe</option>
                            </select>
                        </div>
                        <div class="form-group col-md-3">
                            <label class="text-meisa">¿Existe en Youtube?</label>
                            <input class="form-control" type="text" name="itemyou" id="itemyou">
                        </div>
                    </div>        
                </form>
            </div>
            <div class="modal-footer">
                <button type="submit" id="btnEditColu" class="btn btn-meisa">Guardar</button>
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
            $("#btnEditColu").click(function(e) {
                editProdu();
            });
        });
    </script>
</body>

</html>