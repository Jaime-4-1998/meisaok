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
   include_once '../assets/components/backlan/editPost.php';
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
                        <h1 class="h3 mb-0 text-meisa-red">Dashboard of Edit Content</h1>
                    </div>
                    
                    <?php
                                        include '../assets/components/backend/conexion.php';
                                        $id = $_GET['content'];
                                        $sql = "SELECT id_home,titlesec,editorsecond,titleseceng,editorsecondeng
                                        FROM hometwo WHERE id_home = '$id' "; 
                                            $query = $mbd -> prepare($sql); 
                                            $query -> execute(); 
                                            $results = $query -> fetchAll(PDO::FETCH_OBJ); 
                                                if($query -> rowCount() > 0){ 
                                                    foreach($results as $result) { 
                                            ?>
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h5 class="card-title text-meisa text-center">Editando: <?php echo $id; ?></h5>
                    </div>
                    <p class="alert alert-primary"><?php echo $statusMsge;?></p>
                    <form id="formheade" method="POST" enctype="multipart/form-data">
                        <div class="row">
                            <h2 class="text-center" style="disply:block !important; margin:auto !important; margin-top:1rem !important; margin-bottom:1rem !important;">
                               Edici??n del Titulo y Contenido del segundo parte de Inicio
                            </h2>
                            <input type="hidden" value="<?php echo $id; ?>" name="idhomee">
                                <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="text-meisa">Editando el Titulo del Segundo Encabezado <strong>"Espa??ol"</strong></label>
                                            <input type="text" name="titlesec" class="form-control" id="titleone" placeholder="Minimo 20 palabras">
                                        </div>
                                        <div class="form-group">
                                            <label class="text-meisa">Editando el Contenido del Segundo Encabezado <strong>"Espa??ol"</strong></label>
                                            <textarea name="editorsecond" id="editorsec" rows="10" cols="80" placeholder="Crea el contenido de tu blog" requiered></textarea>
                                        </div>
                                </div>
                                <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="text-meisa">Editando el Titulo del Segundo Encabezado <strong>"Ingles"</strong></label>
                                            <input type="text" name="titleseceng" class="form-control" id="titleone" placeholder="Minimo 20 palabras">
                                        </div>
                                        <div class="form-group">
                                            <label class="text-meisa">Editando el Contenido del Segundo Encabezado <strong>"Ingles"</strong></label>
                                            <textarea name="editorsecondeng" id="editorrsec" rows="10" cols="80" placeholder="Crea el contenido de tu blog" requiered></textarea>
                                        </div>
                                </div>
                        </div>
                        <input type="submit" class="btn btn-meisa btn-lg btn-block" name="submite" value="Guardar Segundo Encabezado">
                    </form>
                    <?php }
                            }else{ ?>
                                <p class="text-center d-block text-warning">Aun no tienes datos publicado</p>
                        <?php } ?>
                </div>
            </div>
            <!-- Footer -->
            <?php include("../assets/components/ui/footer.php"); ?>
            <!-- End of Footer -->
        </div>
    </div>
    <?php include("../assets/components/ui/modal.php"); ?>
    <!-- Bootstrap core JavaScript-->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
      <script>
         CKEDITOR.replace( 'editorsec' );
         CKEDITOR.replace( 'editorrsec' );
      </script>
    <script src="../assets/vendor/jquery/jquery.min.js"></script>
    <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="../assets/js/sb-admin-2.min.js"></script>
</body>

</html>