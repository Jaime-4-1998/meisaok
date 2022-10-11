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
                        <button class="btn btn-meisa" data-toggle="modal" data-target="#modalColumn"><i class="fas fa-plus"></i> Agregar Categoria</button>
                    </div>
                    <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr class="text-center">
                                                <th>Seguridad</th>
                                                <th>Categoria</th>
                                                <th>Eliminar</th>
                                                <th>Editar</th>
                                                
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr class="text-center">
                                                <th>Seguridad</th>
                                                <th>Categoria</th>
                                                <th>Eliminar</th>
                                                <th>Editar</th>
                                                
                                            </tr>
                                        </tfoot>
                                        <?php
                                        include '../assets/components/backend/conexion.php';
                                        $sql = "SELECT id,name
                                        FROM categoriainven ORDER BY id ASC"; 
                                        $query = $mbd -> prepare($sql); 
                                        $query -> execute(); 
                                        $results = $query -> fetchAll(PDO::FETCH_OBJ); 
                                            if($query -> rowCount() > 0){ 
                                                foreach($results as $result) { 
                                                    $datos = $result -> id."||".
                                                    $result -> name; 
                                                ?>
                                        <tr class="text-center">
                                            <td><?php echo $result -> id; ?></td>
                                            <td><?php echo $result -> name; ?></td>
                                            <td><button class="btn btn-meisa" type="button" onclick="deleteCatego('<?php echo $result -> id; ?>')"><i class="fas fa-trash"></i></button></td>
                                            <td><button class="btn btn-warning" type="button" data-toggle="modal" data-target="#modalColuEditar" onclick="EdiatarCatego('<?php echo $datos ?>')"><i class="fas fa-edit"></i></button></td>
                                            <?php
                                                    }
                                                }
                                            ?>
                                        <tbody>
                                        </tbody>
                                    </table>
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr class="text-center">
                                                <th>Seguridad</th>
                                                <th>Categoria</th>
                                                <th>Eliminar</th>
                                                <th>Editar</th>
                                                
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr class="text-center">
                                                <th>Seguridad</th>
                                                <th>Categoria</th>
                                                <th>Eliminar</th>
                                                <th>Editar</th>
                                                
                                            </tr>
                                        </tfoot>
                                        <?php
                                        include '../assets/components/backend/conexion.php';
                                        $sql = "SELECT id,nameingles
                                        FROM categoriainven ORDER BY id ASC"; 
                                        $query = $mbd -> prepare($sql); 
                                        $query -> execute(); 
                                        $results = $query -> fetchAll(PDO::FETCH_OBJ); 
                                            if($query -> rowCount() > 0){ 
                                                foreach($results as $result) { 
                                                    $datos = $result -> id."||".
                                                    $result -> nameingles; 
                                                ?>
                                        <tr class="text-center">
                                            <td><?php echo $result -> id; ?></td>
                                            <td><?php echo $result -> nameingles; ?></td>
                                            <td><button class="btn btn-meisa" type="button" onclick="deleteCategoIngless('<?php echo $result -> id; ?>')"><i class="fas fa-trash"></i></button></td>
                                            <td><button class="btn btn-warning" type="button" data-toggle="modal" data-target="#modalColuEditarIngles" onclick="EdiatarCategoIngles('<?php echo $datos ?>')"><i class="fas fa-edit"></i></button></td>
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
                    <div class="form-group">
                        <label class="text-meisa">Categoria Nueva en Español</label>
                        <input class="form-control" type="text" placeholder="Categoria Nueva en Español" name="categodit" id="categodit" requiered>
                    </div>
                    <div class="form-group">
                        <label class="text-meisa">Categoria Nueva es Ingles</label>
                        <input class="form-control" type="text" placeholder="Categoria Nueva en Inglés" name="categoditert" id="categoditert" requiered>
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
                        <label class="text-meisa">Categoria</label>
                        <input class="form-control" type="text" placeholder="Categoria Nueva" name="categodit" id="categodit" requiered>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="submit" id="btnEditColu" class="btn btn-meisa">Guardar</button>
            </div>
            </div>
        </div>
    </div>
    <!--Modal de editar numero 1-->
    <div class="modal fade" id="modalColuEditarIngles" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
            <div class="modal-header bg-meisaa">
                <h5 class="modal-title text-light" id="exampleModalLabel">Editar Categoria en Ingles</h5>
                <button type="button" class="close text-light" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form class="formBanner" id="formEditColIngles"  method="POST" enctype="multipart/form-data">
                <input type="hidden" id="idbannere" name="idbannere">
                    <div class="form-group">
                        <label class="text-meisa">Categoria</label>
                        <input class="form-control" type="text" placeholder="Categoria Nueva" name="categoditingles" id="categoditingles" requiered>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="submit" id="btnEditColuIngles" class="btn btn-meisa">Guardar</button>
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
                addCat();
            });
            $("#btnEditColu").click(function(e) {
                editCategor();
            });
            $("#btnEditColuIngles").click(function(e) {
                editCategoIngles();
            });
        });
    </script>
</body>

</html>