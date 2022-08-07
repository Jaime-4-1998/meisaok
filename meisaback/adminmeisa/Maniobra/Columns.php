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
    <title>Meisa MX - Maniobra</title>
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
                        <button class="btn btn-meisa" data-toggle="modal" data-target="#modalColumn"><i class="fas fa-plus"></i> Columna Español</button>
                    </div>
                    <div class="row">
                    <?php 
                        include '../assets/components/backcolum/conexion.php';
                        $sql = "SELECT * FROM columnfour ORDER BY prioridad"; 
                        $query = $mbd -> prepare($sql); 
                        $query -> execute(); 
                        $results = $query -> fetchAll(PDO::FETCH_OBJ); 
                        if($query -> rowCount() > 0){ 
                            foreach($results as $result) { 
                                $datos=$result -> id_col."||".
                                        $result -> img."||".
                                        $result -> prioridad."||".
                                        $result -> title."||". 
                                        $result -> engtitle."||". 
                                        $result -> engcont."||". 
                                        $result -> content; ?>
                            <div class="card" style="width: 18rem; margin: 1rem;">
                                <img src="http://localhost/meisa/meisaback/adminmeisa/assets/<?php echo $result -> img; ?>" alt="<?php echo $result -> title; ?>" class="img-fluid">
                                <div class="card-body bg-meisa-dark">
                                    
                                    <h4 class="card-text text-white">Nivel de Prioridad: <?php echo $result -> prioridad; ?></h4>
                                    <h5 class="card-title text-white">Español: <?php echo $result -> title; ?></h5>
                                    <h5 class="card-title text-white">Ingles: <?php echo $result -> engtitle; ?></h5>
                                    <p class="card-text text-white">Contenido Español: <?php echo $result -> content; ?></p>
                                    <p class="card-text text-white">Contenido Ingles: <?php echo $result -> content; ?></p>
                                    <a href="http://localhost/meisa/meisaback/adminmeisa/assets/<?php echo $result -> img; ?>" class="card-text text-white" target="_blank">
                                        Url de la Imagen: <?php echo $result -> id_col; ?>
                                    </a>
                                </div>
                                <div class="card-body bg-meisa-dark">
                                    <button class="btn btn-link text-warning col-5" type="button" data-toggle="modal" data-target="#modalColuEditar" onclick="EdiatarColu('<?php echo $datos ?>')"><i class="fas fa-edit"></i> Editar</button>
                                    <button class="btn btn-link text-danger col-5" type="button" onclick="SiNoColumn('<?php echo $result -> id_col; ?>')"><i class="fas fa-trash"></i> Eliminar</button>
                                </div>
                            </div>
                            <?php 
                            }
                        }else{ ?>
                            <p class="text-center d-block text-meisa">Aun no tienes banners</p>
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
    <!--Modal de agregar-->
    <div class="modal fade" id="modalColumn" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
            <div class="modal-header bg-meisaa">
                <h5 class="modal-title text-light" id="exampleModalLabel">Nueva Columna Ingles/Español</h5>
                <button type="button" class="close text-light" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form class="formBanner" id="formBanner"  method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label class="text-meisa">Poscision</label>
                        <input class="form-control" type="number" placeholder="Prioridad" name="prioridad" id="prioridad" requiered>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label class="text-meisa">Titulo</label>
                            <input class="form-control" type="text" placeholder="Mensaje" name="title" id="title" requiered>
                        </div>
                        <div class="form-group col-md-6">
                            <label class="text-meisa">Titulo en Ingles</label>
                            <input class="form-control" type="text" placeholder="Example" name="titleeng" id="titleeng" requiered>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="text-meisa">Icono</label>
                        <div class="custom-file">
                                <label for="exampleFormControlFile1">Elige tu imagen</label>
                                <input type="file" class="form-control-file" name="imgBanner" />
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label class="text-meisa">Contenido</label>
                            <textarea class="form-control" placeholder="Mensaje" name="content" id="content" rows="3"></textarea>
                        </div>
                        <div class="form-group col-md-6">
                            <label class="text-meisa">Contenido en Ingles</label>
                            <textarea class="form-control" placeholder="Mensaje" name="contenteng" id="contenteng" rows="3"></textarea>
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
                    <div class="form-group">
                        <label class="text-meisa">Poscision</label>
                        <input class="form-control" type="number" placeholder="Prioridad" name="prioridadrdit" id="prioridadrdit" requiered>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label class="text-meisa">Titulo</label>
                            <input class="form-control" type="text" placeholder="Mensaje" name="titlerdit" id="titlerdit" requiered>
                        </div>
                        <div class="form-group col-md-6">
                            <label class="text-meisa">Titulo en Ingles</label>
                            <input class="form-control" type="text" placeholder="Example" name="titleengrdit" id="titleengrdit" requiered>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="text-meisa">Icono</label>
                        <div class="custom-file">
                                <label for="exampleFormControlFile1">Elige tu imagen</label>
                                <input type="file" class="form-control-file" name="imgBannerrdit" />
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label class="text-meisa">Contenido</label>
                            <textarea class="form-control" placeholder="Mensaje" name="contentrdit" id="contentrdit" rows="3"></textarea>
                        </div>
                        <div class="form-group col-md-6">
                            <label class="text-meisa">Contenido en Ingles</label>
                            <textarea class="form-control" placeholder="Mensaje" name="contentengrdit" id="contentengrdit" rows="3"></textarea>
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
                editColu();
            });
        });
    </script>
</body>

</html>