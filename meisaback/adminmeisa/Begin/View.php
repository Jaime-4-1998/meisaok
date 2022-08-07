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
    <title>Meisa MX - View Begin</title>
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
                        <h1 class="h3 mb-0 text-meisa-red">Dashboard View of Begin</h1>
                        <a href="http://localhost/meisa/meisaback/adminmeisa/Begin/Title" class="btn btn-meisa" rel="noopener noreferrer">Hacer Publicación</a>

                    </div>
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
                                        $sql = "SELECT id_home,title_one,desc_one,title_eng,desc_oneng
                                        FROM home ORDER BY id_home ASC"; 
                                        $query = $mbd -> prepare($sql); 
                                        $query -> execute(); 
                                        $results = $query -> fetchAll(PDO::FETCH_OBJ); 
                                            if($query -> rowCount() > 0){ 
                                                foreach($results as $result) { 
                                                    $data = $result -> id_home."||".
                                                    $result -> title_one."||".
                                                    $result -> desc_one."||".
                                                    $result -> title_eng."||". 
                                                    $result -> desc_oneng; 
                                                ?>
                                        <tr>
                                            <td><?php echo $result -> id_home; ?></td>
                                            <td><?php echo $result -> title_one; ?></td>
                                            <td><?php echo $result -> desc_one; ?></td>
                                            <td><?php echo $result -> title_eng; ?></td>
                                            <td><?php echo $result -> desc_oneng; ?></td>
                                            <td><a href="Detalle?content=<?php echo $result -> id_home; ?>" class="btn btn-success"><i class="fas fa-eye"></i></a></td>
                                            <td><button class="btn btn-meisa" type="button" onclick="deletepts('<?php echo $result -> id_home; ?>')"><i class="fas fa-trash"></i></button></td>
                                            <td><a href="Edit?content=<?php echo $result -> id_home; ?>" class="btn btn-warning"><i class="fas fa-edit"></i></a></td>
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
                   <!-- second component -->
                   <div class="row">
                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-meisa-red">Contenido Registrado Correspondiente al Segundo Apartado </h6>
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
                                        $sql = "SELECT id_home,titlesec,editorsecond,titleseceng,editorsecondeng
                                        FROM hometwo ORDER BY id_home ASC"; 
                                        $query = $mbd -> prepare($sql); 
                                        $query -> execute(); 
                                        $results = $query -> fetchAll(PDO::FETCH_OBJ); 
                                            if($query -> rowCount() > 0){ 
                                                foreach($results as $result) { 
                                                    $data = $result -> id_home."||".
                                                    $result -> titlesec."||".
                                                    $result -> editorsecond."||".
                                                    $result -> titleseceng."||". 
                                                    $result -> editorsecondeng; 
                                                ?>
                                        <tr>
                                            <td><?php echo $result -> id_home; ?></td>
                                            <td><?php echo $result -> titlesec; ?></td>
                                            <td><?php echo $result -> editorsecond; ?></td>
                                            <td><?php echo $result -> titleseceng; ?></td>
                                            <td><?php echo $result -> editorsecondeng; ?></td>
                                            <td><a href="DetalleSecond?content=<?php echo $result -> id_home; ?>" class="btn btn-success"><i class="fas fa-eye"></i></a></td>
                                            <td><button class="btn btn-meisa" type="button" onclick="deletesecond('<?php echo $result -> id_home; ?>')"><i class="fas fa-trash"></i></button></td>
                                            <td><a href="EditSecond?content=<?php echo $result -> id_home; ?>" class="btn btn-warning"><i class="fas fa-edit"></i></a></td>
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
    <script src="../assets/components/backend/main.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>
</body>
</html>