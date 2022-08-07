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
<?php
   include_once '../assets/components/backrenta/addHead.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Meisa MX - Dashboard</title>
    <link href="../assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <link href="../assets/css//sb-admin-2.css" rel="stylesheet">
    <script src="https://cdn.ckeditor.com/4.11.2/standard/ckeditor.js"></script>
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
                        <h1 class="h3 mb-0 text-meisa-red">Dashboard of the Page Renta </h1>
                        <button class="btn btn-meisa" data-toggle="modal" data-target="#modalColumn"><i class="fas fa-plus"></i> Columnas Renta</button>
                        <a href="#image" class="btn btn-meisa">Tools de Imagen</a>
                    </div>
                    <p class="alert alert-primary"><?php echo $statusMsg;?></p>
                    <form method="POST" enctype="multipart/form-data">
                        <div class="row"> 
                            <h2 class="text-center" style="disply:block !important; margin:auto !important; margin-bottom:1rem !important;">
                                Titulo y Contenido a la primer parte de Renta de Equiupos
                            </h2>
                           
                                <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="text-meisa">Titulo del Encabezado <strong>"Español"</strong></label>
                                            <input type="text" class="form-control" name="titlesp" id="titlesp" placeholder="Minimo 20 palabras">
                                        </div>
                                        <div class="form-group">
                                            <label class="text-meisa">Contenido del Encabezado <strong>"Español"</strong></label>
                                            <textarea name="editor" id="editor" rows="10" cols="80" placeholder="Crea el contenido de tu blog" requiered></textarea>                                        </div>
                                        </div>
                                <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="text-meisa">Titulo del Encabezado <strong>"Ingles"</strong></label>
                                            <input type="text" class="form-control" name="titleng" id="titleng" placeholder="Minimo 20 palabras">
                                        </div>
                                        <div class="form-group">
                                            <label class="text-meisa">Contenido del Encabezado <strong>"Ingles"</strong></label>
                                            <textarea name="editoreng" id="editorr" rows="10" cols="80" placeholder="Crea el contenido de tu blog" requiered></textarea>
                                        </div>
                                </div>
                        </div>
                        <input type="submit" class="btn btn-meisa btn-lg btn-block" name="submit" value="Guardar Encabezado">

                    </form>
                    <!-- first component -->
                    <div class="row">
                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-meisa-red">Contenido Registrado Correspondiente al Primer Apartado </h6>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr class="text-center">
                                                <th>Seguridad</th>
                                                <th>Titulo</th>
                                                <th>Conetenido</th>
                                                <th>Titulo en Ingles</th>
                                                <th>Contenido en Inlges</th>
                                                <th>Ver</th>
                                                <th>Borrar</th>
                                                <th>Editar</th>
                                                
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr class="text-center">
                                                <th>Seguridad</th>
                                                <th>Titulo</th>
                                                <th>Conetenido</th>
                                                <th>Titulo en Ingles</th>
                                                <th>Contenido en Inlges</th>
                                                <th>Ver</th>
                                                <th>Borrar</th>
                                                <th>Editar</th>
                                                
                                            </tr>
                                        </tfoot>
                                        <?php
                                        include '../assets/components/backend/conexion.php';
                                        $sql = "SELECT id_rent,titlerent,contentrent,titlerenteng,contentrenteng
                                        FROM rentainf ORDER BY id_rent ASC"; 
                                        $query = $mbd -> prepare($sql); 
                                        $query -> execute(); 
                                        $results = $query -> fetchAll(PDO::FETCH_OBJ); 
                                            if($query -> rowCount() > 0){ 
                                                foreach($results as $result) { 
                                                    $data = $result -> id_rent."||".
                                                    $result -> titlerent."||".
                                                    $result -> contentrent."||".
                                                    $result -> titlerenteng."||". 
                                                    $result -> contentrenteng; 
                                                ?>
                                        <tr>
                                            <td><?php echo $result -> id_rent; ?></td>
                                            <td><?php echo $result -> titlerent; ?></td>
                                            <td><?php echo $result -> contentrent; ?></td>
                                            <td><?php echo $result -> titlerenteng; ?></td>
                                            <td><?php echo $result -> contentrenteng; ?></td>
                                            <td><a href="Detalle?content=<?php echo $result -> id_rent; ?>" class="btn btn-success"><i class="fas fa-eye"></i></a></td>
                                            <td><button class="btn btn-meisa" type="button" onclick="deleterent('<?php echo $result -> id_rent; ?>')"><i class="fas fa-trash"></i></button></td>
                                            <td><a href="Edit?content=<?php echo $result -> id_rent; ?>" class="btn btn-warning"><i class="fas fa-edit"></i></a></td>
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
                    <div id="image">
                    <div class="row">
                        <?php 
                            include '../assets/components/backcolum/conexion.php';
                            $sql = "SELECT * FROM columntwo ORDER BY prioridad"; 
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
                                        <p class="card-text text-white">Contenido Ingles: <?php echo $result -> engcont; ?></p>
                                        <a href="http://localhost/meisa/meisaback/adminmeisa/assets/<?php echo $result -> img; ?>" class="card-text text-white" target="_blank">
                                            Url de la Imagen: <?php echo $result -> id_col; ?>
                                        </a>
                                    </div>
                                    <div class="card-body bg-meisa-dark">
                                        <button class="btn btn-link text-warning col-5" type="button" data-toggle="modal" data-target="#modalColuEditar" onclick="EdiatarColutwo('<?php echo $datos ?>')"><i class="fas fa-edit"></i> Editar</button>
                                        <button class="btn btn-link text-danger col-5" type="button" onclick="SiNoColumntwo('<?php echo $result -> id_col; ?>')"><i class="fas fa-trash"></i> Eliminar</button>
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
            </div>
            <!-- Footer -->
            <?php include("../assets/components/ui/footer.php"); ?>
            <!-- End of Footer -->
        </div>
    </div>
    <?php include("../assets/components/ui/modal.php"); ?>
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
                <form class="formBanner" id="formBannertwo"  method="POST" enctype="multipart/form-data">
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
                <button type="submit" id="btnAddCltw" class="btn btn-meisa">Guardar</button>
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
                <form class="formBanner" id="formEditColtwoim"  method="POST" enctype="multipart/form-data">
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
                <button type="submit" id="btnEditColutw" class="btn btn-meisa">Guardar</button>
            </div>
            </div>
        </div>
    </div>
    <!-- Bootstrap core JavaScript-->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
      <script>
         CKEDITOR.replace( 'editor' );
         CKEDITOR.replace( 'editorr' );
      </script>
    <script src="../assets/vendor/jquery/jquery.min.js"></script>
    <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="../assets/js/sb-admin-2.min.js"></script>
    <script src="../assets/components/backend/main.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>
    <script>
        $(document).ready(function(){
            $("#btnAddCltw").click(function(e) {
                addImgColumtwo();
            });
            $("#btnEditColutw").click(function(e) {
                editImgColutwo();
            });
        });
    </script>
</body>

</html>