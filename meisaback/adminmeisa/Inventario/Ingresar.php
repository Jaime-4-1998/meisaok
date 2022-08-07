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
                                                <th>Seguridad</th>
                                                <th>Categoria</th>
                                                <th>Nombre</th>
                                                <th>Descripcion</th>
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
                                                <th>Seguridad</th>
                                                <th>Categoria</th>
                                                <th>Nombre</th>
                                                <th>Descripcion</th>
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
                                                    $result -> inve_seguridad."||".
                                                    $result -> inve_catego."||".
                                                    $result -> inve_nombre."||". 
                                                    $result -> inve_desc."||".
                                                    $result -> inve_marca."||".  
                                                    $result -> inve_modelo."||".
                                                    $result -> inve_observaciones."||".
                                                    $result -> inve_estatus; 
                                                ?>
                                        <tr class="text-center">
                                            <td><?php echo $result -> inve_seguridad; ?></td>
                                            <td><?php echo $result -> inve_catego; ?></td>
                                            <td><?php echo $result -> inve_nombre; ?></td>
                                            <td><?php echo $result -> inve_desc; ?></td>
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
        <div class="modal-dialog modal-lg modal-dialog-scrollable" role="document">
            <div class="modal-content">
            <div class="modal-header bg-meisaa">
                <h5 class="modal-title text-light" id="exampleModalLabel">Nuevo Producto</h5>
                <button type="button" class="close text-light" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form class="formBanner" id="formBanner"  method="POST" enctype="multipart/form-data">
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label class="text-meisa">ITEM FOTOGRAFICO</label>
                            <input class="form-control" type="number" placeholder="ITEM FOTOGRAFICO" name="itemfoto" id="itemfoto" requiered>
                        </div>
                        <div class="form-group col-md-4">
                            <label class="text-meisa">ITEM MEISA</label>
                            <input class="form-control" type="number" placeholder="ITEM MEISA" name="itemmeisa" id="itemmeisa" requiered>
                        </div>
                        <div class="form-group col-md-4">
                            <label class="text-meisa">LOTE</label>
                            <input class="form-control" type="number" placeholder="ITEM LOTE" name="itemlote" id="itemlote" requiered>
                        </div>
                    </div>
                     <!--Modal sepa-->
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label class="text-meisa">CATEGORIA</label>
                            <select class="form-control" name="itemcatego" id="itemcatego">
                                          <option selected >Elije una categoria</option>
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
                            <label class="text-meisa">Nombre</label>
                            <input class="form-control" type="text" placeholder="Nombre" name="itemnombre" id="itemnombre" requiered>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label class="text-meisa">Venta</label>
                            <select class="form-control" name="itemventa" id="itemventa">
                                <option selected >Elije el estatus</option>
                                <option value="Si">Si</option>
                                <option value="No">No</option>
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label class="text-meisa">Renta</label>
                            <select class="form-control" name="itemrenta" id="itemrenta">
                                <option selected >Elije el estatus</option>
                                <option value="Si">Si</option>
                                <option value="No">No</option>
                            </select>
                        </div>
                    </div>
                     <!--Modal sepa-->
                    <div class="form-group">
                            <label class="text-meisa">Descripción</label>
                            <textarea class="form-control" name="itemdesc" id="itemdesc" cols="30" rows="10"></textarea>
                    </div>  
                     <!--Modal sepa-->
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label class="text-meisa">Marca</label>
                            <input class="form-control" type="text" placeholder="ITEM Marca" name="itemmarca" id="itemmarca" requiered>
                        </div>
                        <div class="form-group col-md-6">
                            <label class="text-meisa">Modelo</label>
                            <input class="form-control" type="text" placeholder="ITEM Modelo" name="itemmodelo" id="itemmodelo" requiered>
                        </div>
                    </div>     
                     <!--Modal sepa-->
                     <div class="form-row">
                        <div class="form-group col-md-4">
                            <label class="text-meisa">NO DE SERIE</label>
                            <input class="form-control" type="text" placeholder="ITEM Serie" name="itemserie" id="itemserie" requiered>
                        </div>
                        <div class="form-group col-md-4">
                            <label class="text-meisa">Año</label>
                            <input class="form-control" type="text" placeholder="ITEM Modelo" name="itemyear" id="itemyear" requiered>
                        </div>
                        <div class="form-group col-md-4">
                            <label class="text-meisa">Correiente</label>
                            <input class="form-control" type="text" placeholder="ITEM Modelo" name="itemcorr" id="itemcorr" requiered>
                        </div>
                    </div>     
                       <!--Modal sepa-->
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label class="text-meisa">Motor</label>
                            <input class="form-control" type="text" placeholder="ITEM Motor" name="itemmotor" id="itemmotor" requiered>
                        </div>
                        <div class="form-group col-md-6">
                            <label class="text-meisa">Capacidad</label>
                            <input class="form-control" type="text" placeholder="ITEM Capacidad" name="itemcapa" id="itemcapa" requiered>
                        </div>
                    </div>                
                    <!--Modal sepa-->
                        <div class="form-group">
                            <label class="text-meisa">Observaciones</label>
                            <input class="form-control" type="text" placeholder="Observaciones" name="itemobser" id="itemobser" requiered>
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
                        <div class="form-group col-md-3">
                            <label class="text-meisa">Imagen Trasera</label>
                            <div class="custom-file">
                                    <label for="exampleFormControlFile1">Elige tu imagen</label>
                                    <input type="file" class="form-control-file" name="imgtrasera" />
                            </div>
                        </div>
                        <div class="form-group col-md-3">
                            <label class="text-meisa">Imagen Cara Derecha</label>
                            <div class="custom-file">
                                    <label for="exampleFormControlFile1">Elige tu imagen</label>
                                    <input type="file" class="form-control-file" name="imgdere" />
                            </div>
                        </div>
                        <div class="form-group col-md-3">
                            <label class="text-meisa">Imagen Cara Izquierda</label>
                            <div class="custom-file">
                                    <label for="exampleFormControlFile1">Elige tu imagen</label>
                                    <input type="file" class="form-control-file" name="imgizq" />
                            </div>
                        </div>
                     </div>
                    
                    <!--Modal sepa-->
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label class="text-meisa">Precio</label>
                            <input class="form-control" type="text" placeholder="ITEM Motor" name="itemprecio" id="itemprecio" requiered>
                        </div>
                        <div class="form-group col-md-6">
                            <label class="text-meisa">Estatus</label>
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
                            <label class="text-meisa">FB Meisa MX</label>
                            <select class="form-control" name="itemefbmx" id="itemefbmx">
                                <option selected >Elije el estatus</option>
                                <option value="Existe">Existe</option>
                                <option value="No Existe">No Existe</option>
                            </select>
                        </div>
                        <div class="form-group col-md-3">
                            <label class="text-meisa">FB Meisa Equip</label>
                            <select class="form-control" name="itemefbequip" id="itemefbequip">
                                <option selected >Elije el estatus</option>
                                <option value="Existe">Existe</option>
                                <option value="No Existe">No Existe</option>
                            </select>
                        </div>

                        <div class="form-group col-md-3">
                            <label class="text-meisa">Segunda</label>
                            <select class="form-control" name="itemsegun" id="itemsegun">
                                <option selected >Elije el estatus</option>
                                <option value="Existe">Existe</option>
                                <option value="No Existe">No Existe</option>
                            </select>
                        </div>
                        <div class="form-group col-md-3">
                            <label class="text-meisa">LinkedIn</label>
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
                            <label class="text-meisa">Mercado Libre</label>
                            <select class="form-control" name="itemercado" id="itemercado">
                                <option selected >Elije el estatus</option>
                                <option value="Existe">Existe</option>
                                <option value="No Existe">No Existe</option>
                            </select>
                        </div>
                        <div class="form-group col-md-3">
                            <label class="text-meisa">Twitter</label>
                            <select class="form-control" name="itemtw" id="itemtw">
                                <option selected >Elije el estatus</option>
                                <option value="Existe">Existe</option>
                                <option value="No Existe">No Existe</option>
                            </select>
                        </div>

                        <div class="form-group col-md-3">
                            <label class="text-meisa">Instagram</label>
                            <select class="form-control" name="itemins" id="itemins">
                                <option selected >Elije el estatus</option>
                                <option value="Existe">Existe</option>
                                <option value="No Existe">No Existe</option>
                            </select>
                        </div>
                        <div class="form-group col-md-3">
                            <label class="text-meisa">Youtube</label>
                            <input class="form-control" type="text" name="itemyou" id="itemyou">
                        </div>
                    </div>        
                </form>
            </div>
            <div class="modal-footer">
                <button type="submit" id="btnAddColum" class="btn btn-meisa">Guardar</button>
            </div>
            </div>
        </div>
    </div>
    <!--Modal de editar-->
    <div class="modal fade" id="modalColuEditar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
            <div class="modal-header bg-meisaa">
                <h5 class="modal-title text-light" id="exampleModalLabel">Editar Columna Ingles/Español</h5>
                <button type="button" class="close text-light" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form class="formBanner" id="formEditCol"  method="POST" enctype="multipart/form-data">
                <input type="hidden" id="idbanner" name="idbanner">
                <div class="form-row">
                        <div class="form-group col-md-4">
                            <label class="text-meisa">ITEM FOTOGRAFICO</label>
                            <input class="form-control" type="number" placeholder="ITEM FOTOGRAFICO" name="itemfoto" id="itemfoto" requiered>
                        </div>
                        <div class="form-group col-md-4">
                            <label class="text-meisa">ITEM MEISA</label>
                            <input class="form-control" type="number" placeholder="ITEM MEISA" name="itemmeisa" id="itemmeisa" requiered>
                        </div>
                        <div class="form-group col-md-4">
                            <label class="text-meisa">LOTE</label>
                            <input class="form-control" type="number" placeholder="ITEM LOTE" name="itemlote" id="itemlote" requiered>
                        </div>
                    </div>
                     <!--Modal sepa-->
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label class="text-meisa">CATEGORIA</label>
                            <select class="form-control" name="itemcatego" id="itemcatego">
                                          <option selected >Elije una categoria</option>
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
                            <label class="text-meisa">Nombre</label>
                            <input class="form-control" type="text" placeholder="Nombre" name="itemnombre" id="itemnombre" requiered>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label class="text-meisa">Venta</label>
                            <select class="form-control" name="itemventa" id="itemventa">
                                <option selected >Elije el estatus</option>
                                <option value="Si">Si</option>
                                <option value="No">No</option>
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label class="text-meisa">Renta</label>
                            <select class="form-control" name="itemrenta" id="itemrenta">
                                <option selected >Elije el estatus</option>
                                <option value="Si">Si</option>
                                <option value="No">No</option>
                            </select>
                        </div>
                    </div>
                     <!--Modal sepa-->
                    <div class="form-group">
                            <label class="text-meisa">Descripción</label>
                            <textarea class="form-control" name="itemdesc" id="itemdesc" cols="30" rows="10"></textarea>
                    </div>  
                     <!--Modal sepa-->
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label class="text-meisa">Marca</label>
                            <input class="form-control" type="text" placeholder="ITEM Marca" name="itemmarca" id="itemmarca" requiered>
                        </div>
                        <div class="form-group col-md-6">
                            <label class="text-meisa">Modelo</label>
                            <input class="form-control" type="text" placeholder="ITEM Modelo" name="itemmodelo" id="itemmodelo" requiered>
                        </div>
                    </div>     
                     <!--Modal sepa-->
                     <div class="form-row">
                        <div class="form-group col-md-4">
                            <label class="text-meisa">NO DE SERIE</label>
                            <input class="form-control" type="text" placeholder="ITEM Serie" name="itemserie" id="itemserie" requiered>
                        </div>
                        <div class="form-group col-md-4">
                            <label class="text-meisa">Año</label>
                            <input class="form-control" type="text" placeholder="ITEM Modelo" name="itemyear" id="itemyear" requiered>
                        </div>
                        <div class="form-group col-md-4">
                            <label class="text-meisa">Correiente</label>
                            <input class="form-control" type="text" placeholder="ITEM Modelo" name="itemcorr" id="itemcorr" requiered>
                        </div>
                    </div>     
                       <!--Modal sepa-->
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label class="text-meisa">Motor</label>
                            <input class="form-control" type="text" placeholder="ITEM Motor" name="itemmotor" id="itemmotor" requiered>
                        </div>
                        <div class="form-group col-md-6">
                            <label class="text-meisa">Capacidad</label>
                            <input class="form-control" type="text" placeholder="ITEM Capacidad" name="itemcapa" id="itemcapa" requiered>
                        </div>
                    </div>                
                    <!--Modal sepa-->
                        <div class="form-group">
                            <label class="text-meisa">Observaciones</label>
                            <input class="form-control" type="text" placeholder="Observaciones" name="itemobser" id="itemobser" requiered>
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
                        <div class="form-group col-md-3">
                            <label class="text-meisa">Imagen Trasera</label>
                            <div class="custom-file">
                                    <label for="exampleFormControlFile1">Elige tu imagen</label>
                                    <input type="file" class="form-control-file" name="imgtrasera" />
                            </div>
                        </div>
                        <div class="form-group col-md-3">
                            <label class="text-meisa">Imagen Cara Derecha</label>
                            <div class="custom-file">
                                    <label for="exampleFormControlFile1">Elige tu imagen</label>
                                    <input type="file" class="form-control-file" name="imgdere" />
                            </div>
                        </div>
                        <div class="form-group col-md-3">
                            <label class="text-meisa">Imagen Cara Izquierda</label>
                            <div class="custom-file">
                                    <label for="exampleFormControlFile1">Elige tu imagen</label>
                                    <input type="file" class="form-control-file" name="imgizq" />
                            </div>
                        </div>
                     </div>
                    
                    <!--Modal sepa-->
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label class="text-meisa">Precio</label>
                            <input class="form-control" type="text" placeholder="ITEM Motor" name="itemprecio" id="itemprecio" requiered>
                        </div>
                        <div class="form-group col-md-6">
                            <label class="text-meisa">Estatus</label>
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
                            <label class="text-meisa">FB Meisa MX</label>
                            <select class="form-control" name="itemefbmx" id="itemefbmx">
                                <option selected >Elije el estatus</option>
                                <option value="Existe">Existe</option>
                                <option value="No Existe">No Existe</option>
                            </select>
                        </div>
                        <div class="form-group col-md-3">
                            <label class="text-meisa">FB Meisa Equip</label>
                            <select class="form-control" name="itemefbequip" id="itemefbequip">
                                <option selected >Elije el estatus</option>
                                <option value="Existe">Existe</option>
                                <option value="No Existe">No Existe</option>
                            </select>
                        </div>

                        <div class="form-group col-md-3">
                            <label class="text-meisa">Segunda</label>
                            <select class="form-control" name="itemsegun" id="itemsegun">
                                <option selected >Elije el estatus</option>
                                <option value="Existe">Existe</option>
                                <option value="No Existe">No Existe</option>
                            </select>
                        </div>
                        <div class="form-group col-md-3">
                            <label class="text-meisa">LinkedIn</label>
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
                            <label class="text-meisa">Mercado Libre</label>
                            <select class="form-control" name="itemercado" id="itemercado">
                                <option selected >Elije el estatus</option>
                                <option value="Existe">Existe</option>
                                <option value="No Existe">No Existe</option>
                            </select>
                        </div>
                        <div class="form-group col-md-3">
                            <label class="text-meisa">Twitter</label>
                            <select class="form-control" name="itemtw" id="itemtw">
                                <option selected >Elije el estatus</option>
                                <option value="Existe">Existe</option>
                                <option value="No Existe">No Existe</option>
                            </select>
                        </div>

                        <div class="form-group col-md-3">
                            <label class="text-meisa">Instagram</label>
                            <select class="form-control" name="itemins" id="itemins">
                                <option selected >Elije el estatus</option>
                                <option value="Existe">Existe</option>
                                <option value="No Existe">No Existe</option>
                            </select>
                        </div>
                        <div class="form-group col-md-3">
                            <label class="text-meisa">Youtube</label>
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