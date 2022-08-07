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
   include_once '../assets/components/backlan/addHead.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Meisa MX - Titles</title>
    <link href="../assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <link href="../assets/css/sb-admin-2.css" rel="stylesheet">
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
                        <h1 class="h3 mb-0 text-meisa-red">Titles of Page Home</h1>
                        <a href="http://localhost/meisa/meisaback/adminmeisa/Begin/View" class="btn btn-meisa" rel="noopener noreferrer">Ver Contenido Publicado</a>
                    </div>
                    <p class="alert alert-primary"><?php echo $statusMsg;?></p>
                    <form method="POST" enctype="multipart/form-data">
                        <div class="row"> 
                            <h2 class="text-center" style="disply:block !important; margin:auto !important; margin-bottom:1rem !important;">
                                Titulo y Contenido a la primer parte de Inicio
                            </h2>
                           
                                <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="text-meisa">Titulo del Primer Encabezado <strong>"Español"</strong></label>
                                            <input type="text" class="form-control" name="titlesp" id="titlesp" placeholder="Minimo 20 palabras">
                                        </div>
                                        <div class="form-group">
                                            <label class="text-meisa">Contenido del Primer Encabezado <strong>"Español"</strong></label>
                                            <textarea name="editor" id="editor" rows="10" cols="80" placeholder="Crea el contenido de tu blog" requiered></textarea>                                        </div>
                                        </div>
                                <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="text-meisa">Titulo del Primer Encabezado <strong>"Ingles"</strong></label>
                                            <input type="text" class="form-control" name="titleng" id="titleng" placeholder="Minimo 20 palabras">
                                        </div>
                                        <div class="form-group">
                                            <label class="text-meisa">Contenido del Primer Encabezado <strong>"Ingles"</strong></label>
                                            <textarea name="editoreng" id="editorr" rows="10" cols="80" placeholder="Crea el contenido de tu blog" requiered></textarea>
                                        </div>
                                </div>
                        </div>
                        <input type="submit" class="btn btn-meisa btn-lg btn-block" name="submit" value="Guardar Primer Encabezado">

                    </form>
                    <br />
                    <p class="alert alert-primary"><?php echo $statusMsge;?></p>
                    <form id="formheade" method="POST" enctype="multipart/form-data">
                        <div class="row">
                            <h2 class="text-center" style="disply:block !important; margin:auto !important; margin-top:1rem !important; margin-bottom:1rem !important;">
                                Titulo y Contenido a la segunda parte de Inicio
                            </h2>
                                <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="text-meisa">Titulo del Segundo Encabezado <strong>"Español"</strong></label>
                                            <input type="text" name="titlesec" class="form-control" id="titleone" placeholder="Minimo 20 palabras">
                                        </div>
                                        <div class="form-group">
                                            <label class="text-meisa">Contenido del Segundo Encabezado <strong>"Español"</strong></label>
                                            <textarea name="editorsecond" id="editorsec" rows="10" cols="80" placeholder="Crea el contenido de tu blog" requiered></textarea>
                                        </div>
                                </div>
                                <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="text-meisa">Titulo del Segundo Encabezado <strong>"Ingles"</strong></label>
                                            <input type="text" name="titleseceng" class="form-control" id="titleone" placeholder="Minimo 20 palabras">
                                        </div>
                                        <div class="form-group">
                                            <label class="text-meisa">Contenido del Segundo Encabezado <strong>"Ingles"</strong></label>
                                            <textarea name="editorsecondeng" id="editorrsec" rows="10" cols="80" placeholder="Crea el contenido de tu blog" requiered></textarea>
                                        </div>
                                </div>
                        </div>
                        <input type="submit" class="btn btn-meisa btn-lg btn-block" name="submite" value="Guardar Segundo Encabezado">
                    </form>
                </div>
            </div>
            <!-- Footer -->
            <?php include("../assets/components/ui/footer.php"); ?>
            <!-- End of Footer -->
        </div>
    </div>
    <?php include("../assets/components/ui/modal.php"); ?>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
      <script>
         CKEDITOR.replace( 'editor' );
         CKEDITOR.replace( 'editorr' );
         CKEDITOR.replace( 'editorsec' );
         CKEDITOR.replace( 'editorrsec' );
      </script>
    <!-- Bootstrap core JavaScript-->
    <script src="../assets/vendor/jquery/jquery.min.js"></script>
    <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="../assets/js/sb-admin-2.min.js"></script>
    <script src="../assets/components/backend/main.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>

</html>