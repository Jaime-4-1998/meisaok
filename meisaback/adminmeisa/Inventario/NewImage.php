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
    <title>Meisa MX - Image</title>
    <link href="../assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <link href="../assets/css/sb-admin-2.css" rel="stylesheet">
    <!-- CSS -->
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
                        <h1 class="h3 mb-0 text-meisa-red">Dashboard for Images of Ventas</h1>
                        <button class="btn btn-meisa" data-toggle="modal" data-target="#modalBanner"><i class="fas fa-plus"></i> Agregar Imagen</button>
                    </div>
                    <div class="row">
                        <!-- Earnings (Monthly) Card Example -->
                        <?php
                            include '../assets/components/backend/conexion.php';
                            $consutotal = "SELECT count(*) FROM imgvt WHERE id_imgven is not null"; 
                            $ejecu = $mbd -> prepare($consutotal); 
                            $ejecu -> execute();
                            $adm = $ejecu->fetchColumn();
                        ?>
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-meisa-black shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-meisa-red text-uppercase mb-1">
                                                Imagenes Publicadas</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $adm; ?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-image fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    <div class="row">
                    <?php 
                        include '../assets/components/backend/conexion.php';
                        $sql = "SELECT * FROM imgvt ORDER BY prioridad"; 
                        $query = $mbd -> prepare($sql); 
                        $query -> execute(); 
                        $results = $query -> fetchAll(PDO::FETCH_OBJ); 
                        if($query -> rowCount() > 0){ 
                            foreach($results as $result) { 
                                $datos=$result -> id_imgven."||".
                                        $result -> img."||".
                                        $result -> prioridad."||".
                                        $result -> title."||". 
                                        $result -> seo; ?>
                            <div class="card" style="width: 18rem; margin: 1rem;">
                                <img src="http://localhost/meisa/meisaback/adminmeisa/assets/<?php echo $result -> img; ?>" alt="<?php echo $result -> seo; ?>" class="img-fluid">
                                <div class="card-body bg-meisa-dark">
                                    <h5 class="card-title text-white">Titulo en Español: <?php echo $result -> title; ?></h5>
                                    <h5 class="card-title text-white">Titulo en Ingles: <?php echo $result -> titleeng; ?></h5>
                                    <h5 class="card-title text-white">SEO: <?php echo $result -> seo; ?></h5>
                                    <p class="card-text text-white">Nivel de Prioridad: <?php echo $result -> prioridad; ?></p>
                                    <a href="http://localhost/meisa/meisaback/adminmeisa/assets/<?php echo $result -> img; ?>" class="card-text text-white" target="_blank">
                                        URL de Imagen: <?php echo $result -> id_imgven; ?>
                                    </a>
                                </div>
                                <div class="card-body bg-meisa-dark">
                                    <button class="btn btn-link text-warning col-5" type="button" data-toggle="modal" data-target="#modalBannerEditar" onclick="verEdiatarImgvent('<?php echo $datos ?>')"><i class="fas fa-edit"></i> Editar</button>
                                    <button class="btn btn-link text-danger col-5" type="button" onclick="preguntarImgventa('<?php echo $result -> id_imgven; ?>')"><i class="fas fa-trash"></i> Eliminar</button>
                                </div>
                            </div>
                            <?php 
                            }
                        }else{ ?>
                            <p class="text-center d-block text-meisa">Aun no tienes Imagenes en la parte de Ventas</p>
                        <?php } ?>
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
    <script src="../assets/vendor/jquery/jquery.min.js"></script>
    <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="../assets/js/sb-admin-2.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- MODAL BANNERS ADD -->
    <div class="modal fade" id="modalBanner" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header bg-meisaa">
                <h5 class="modal-title text-light" id="exampleModalLabel">Nueva Imagen</h5>
                <button type="button" class="close text-light" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form class="formBanner" id="formImgVentas"  method="POST" enctype="multipart/form-data">
                    <div>
                        <p><b>Prioridad</b></p>
                        <input class="form-control" type="number" placeholder="Prioridad" name="prioridad" id="prioridad" requiered>
                    </div>
                    <div>
                        <p><b>Texto de la Imagen en Español</b></p>
                        <input class="form-control" type="text" placeholder="Mensaje" name="title" id="title" requiered>
                    </div>
                    <div>
                        <p><b>Texto de la Imagen en Ingles</b></p>
                        <input class="form-control" type="text" placeholder="Mensaje" name="titleeng" id="titleeng" requiered>
                    </div>
                    <div>
                        <p><b>Ayuda SEO</b></p>
                        <input class="form-control" type="text" placeholder="Mensaje" name="seo" id="seo" requiered>
                    </div>
                    <div>
                        <p><b>Imagen</b></p>
                        <div class="custom-file">
                                <label for="exampleFormControlFile1">Elige tu imagen</label>
                                <input type="file" class="form-control-file" name="imgBanner" />
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="submit" id="btnAddImgVent" class="btn btn-meisa">Guardar</button>
            </div>
            </div>
        </div>
    </div>
    <!-- MODAL BANNERS EDIT -->
    <div class="modal fade" id="modalBannerEditar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header bg-warning">
                <h5 class="modal-title text-light" id="exampleModalLabel">Editar Banner</h5>
                <button type="button" class="close text-light" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form class="formBannerEdit" id="formImgVentEdit"  method="POST" enctype="multipart/form-data">
                    <input type="hidden" id="idbanner" name="idbanner">
                    <div>
                        <p><b>Imagen</b></p>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" name="imgBannerEdit" id="imgBannerEdit" accept="image/png,image/jpeg">
                            <label class="custom-file-label" for="customFile">Elige la imagen</label>
                        </div>
                    </div>
                    <div>
                        <p><b>Prioridad</b></p>
                        <input class="form-control" type="number" placeholder="Prioridad" name="prioridadEdit" id="prioridadEdit">
                    </div>
                    <div>
                        <p><b>title</b></p>
                        <input class="form-control" type="text" placeholder="mensaje" name="mensajeEdita" id="mensajeEdita">
                    </div>
                    <div>
                        <p><b>Texto de la Imagen en Ingles</b></p>
                        <input class="form-control" type="text" placeholder="Mensaje" name="mensajeEditaeng" id="mensajeEditaeng" requiered>
                    </div>
                    <div>
                        <p><b>seo</b></p>
                        <input class="form-control" type="text" placeholder="mensaje" name="seoEdita" id="seoEdita">
                    </div>
                    
                    
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" id="btnEditimgvent" class="btn btn-success">Guardar</button>
            </div>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function(){
            $("#btnAddImgVent").click(function(e) {
                addImgvent();
            });
            $("#btnEditimgvent").click(function(e) {
                editImgVEnt();
            });
        });
    </script>
    <script src="../assets/components/backend/main.js"></script>
    <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>
</body>
</html>