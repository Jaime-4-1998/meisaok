<?php

    if (isset($_SESSION['identificador'])){
        $usuario = $_SESSION['identificador'];
    }else{
 header('Location: index.php');
     die() ;
 }
    $inactividad = 8255;
    if(isset($_SESSION["timeout"])){
        $sessionTTL = time() - $_SESSION["timeout"];
        if($sessionTTL > $inactividad){
            session_destroy();
            header("Location: index.php");
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
    <title>Meisa MX - Dashboard</title>
    <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <link href="assets/css//sb-admin-2.css" rel="stylesheet">
</head>
<body id="page-top">
    <div id="wrapper">
        <!-- Sidebar -->
        <?php include("assets/components/ui/sidebar.php"); ?>
        <!-- End of Sidebar -->
        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">
                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light box-sh-meisa bg-meisa topbar mb-4 static-top shadow">
                <?php include("assets/components/ui/nav.php"); ?>
                </nav>
                <!-- End of Topbar -->
                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-meisa-red">Dashboard</h1>
                    </div>
                    <h2 class="h4 mb-0 text-meisa-red">Contenido de Pagina de Inicio</h2>
                    <div class="row">
                        
                        <!-- Earnings (Monthly) Card Example -->
                        <?php
                            include 'assets/components/backend/conexion.php';
                            //conteo de banners
                            $consutotal = "SELECT count(*) FROM banners WHERE id_banner is not null"; 
                            $ejecu = $mbd -> prepare($consutotal); 
                            $ejecu -> execute();
                            $adm = $ejecu->fetchColumn();
                            //conteo de columnas
                            $consutotal1 = "SELECT count(*) FROM columnfour WHERE id_col is not null"; 
                            $ejecu1 = $mbd -> prepare($consutotal1); 
                            $ejecu1 -> execute();
                            $adm1 = $ejecu1->fetchColumn();
                            //conteo de titluos
                            $consutotal2 = "SELECT count(*) FROM home WHERE id_home is not null"; 
                            $ejecu2 = $mbd -> prepare($consutotal2); 
                            $ejecu2 -> execute();
                            $adm2 = $ejecu2->fetchColumn();
                             //conteo de users
                             $consutotal3 = "SELECT count(*) FROM meisaad WHERE id_token is not null"; 
                             $ejecu3 = $mbd -> prepare($consutotal3); 
                             $ejecu3 -> execute();
                             $adm3 = $ejecu3->fetchColumn();
                        ?>
                        <!--//conteo de users-->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-meisa-black shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-meisa-red text-uppercase mb-1">
                                                Titulos Publicados</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $adm3;?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-users fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--//conteo de banners-->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-meisa-black shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-meisa-red text-uppercase mb-1">
                                                Banners Publicados</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $adm; ?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-image fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                         <!--//conteo de columnas-->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-meisa-black shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-meisa-red text-uppercase mb-1">
                                                Columnas Publicadas</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $adm1; ?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-th fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                         <!--//conteo de titulos-->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-meisa-black shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-meisa-red text-uppercase mb-1">
                                                Titulos Publicados</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $adm2;?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-newspaper fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <h2 class="h4 mb-0 text-meisa-red">Contenido de Pagina de Maniobra</h2>
                    <div class="row">
                        <?php
                            include 'assets/components/backend/conexion.php';
                             //conteo de titel
                             $consutotal4 = "SELECT count(*) FROM maniobrameisa WHERE id_mani  is not null"; 
                             $ejecu4 = $mbd -> prepare($consutotal4); 
                             $ejecu4 -> execute();
                             $adm4 = $ejecu4->fetchColumn();
                              //conteo de img
                              $consutotal5 = "SELECT count(*) FROM imgextra WHERE id_img  is not null"; 
                              $ejecu5 = $mbd -> prepare($consutotal5); 
                              $ejecu5 -> execute();
                              $adm5 = $ejecu5->fetchColumn();
                        ?>
                        <!--//conteo de titel-->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-meisa-black shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-meisa-red text-uppercase mb-1">
                                                Titulos Publicados</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $adm4;?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-newspaper fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                         <!--//conteo de imgex-->
                         <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-meisa-black shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-meisa-red text-uppercase mb-1">
                                                Imagenes de Maniobra</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $adm5;?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-image fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <h2 class="h4 mb-0 text-meisa-red">Contenido de Pagina de Renta de Equipos</h2>
                    <div class="row">
                        <?php
                            include 'assets/components/backend/conexion.php';
                             //conteo de titel
                             $consutotal6 = "SELECT count(*) FROM rentainf WHERE id_rent is not null"; 
                             $ejecu6 = $mbd -> prepare($consutotal6); 
                             $ejecu6 -> execute();
                             $adm6 = $ejecu6->fetchColumn();
                              //conteo de img
                              $consutotal8 = "SELECT count(*) FROM columntwo WHERE id_col  is not null"; 
                              $ejecu8 = $mbd -> prepare($consutotal8); 
                              $ejecu8 -> execute();
                              $adm8 = $ejecu8->fetchColumn();
                        ?>
                        <!--//conteo de titel-->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-meisa-black shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-meisa-red text-uppercase mb-1">
                                                Titulos Publicados</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $adm6;?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-newspaper fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                         <!--//conteo de imgex-->
                         <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-meisa-black shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-meisa-red text-uppercase mb-1">
                                                Imagenes de Renta de Equipos</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $adm8;?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-image fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <h2 class="h4 mb-0 text-meisa-red">Contenido de Pagina de Plantas Luz</h2>
                    <div class="row">
                    <?php
                            include 'assets/components/backend/conexion.php';
                             //conteo de titel
                             $consutotal12 = "SELECT count(*) FROM pageluz WHERE id_luz is not null"; 
                             $ejecu12 = $mbd -> prepare($consutotal12); 
                             $ejecu12 -> execute();
                             $adm12 = $ejecu12->fetchColumn();
                              //conteo de img
                              $consutotal13 = "SELECT count(*) FROM columnluz WHERE id_col  is not null"; 
                              $ejecu13 = $mbd -> prepare($consutotal13); 
                              $ejecu13 -> execute();
                              $adm13 = $ejecu13->fetchColumn();
                        ?>
                        <!--//conteo de titel-->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-meisa-black shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-meisa-red text-uppercase mb-1">
                                                Titulos Publicados</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $adm12;?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-newspaper fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                         <!--//conteo de titel-->
                         <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-meisa-black shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-meisa-red text-uppercase mb-1">
                                                Columnas Publicadas</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $adm13;?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-newspaper fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <h2 class="h4 mb-0 text-meisa-red">Inventario de MEISA</h2>
                    <div class="row">
                    <?php
                            include 'assets/components/backend/conexion.php';
                             //conteo de titel
                             $consutotal14 = "SELECT count(*) FROM categoriainven WHERE id is not null"; 
                             $ejecu14 = $mbd -> prepare($consutotal14); 
                             $ejecu14 -> execute();
                             $adm14 = $ejecu14->fetchColumn();
                              //conteo de img
                              $consutotal15 = "SELECT count(*) FROM inventario WHERE inve_id  is not null"; 
                              $ejecu15 = $mbd -> prepare($consutotal15); 
                              $ejecu15 -> execute();
                              $adm15 = $ejecu15->fetchColumn();
                               //conteo de img
                               $consutotal30 = "SELECT count(*) FROM inventario WHERE inve_catego = 'Equipo de Elevación'"; 
                               $ejecu30 = $mbd -> prepare($consutotal30); 
                               $ejecu30 -> execute();
                               $adm30 = $ejecu30->fetchColumn();
                               //conteo de img
                               $consutotal31 = "SELECT count(*) FROM inventario WHERE inve_catego = 'Motores'"; 
                               $ejecu31 = $mbd -> prepare($consutotal31); 
                               $ejecu31 -> execute();
                               $adm31 = $ejecu31->fetchColumn();
                        ?>
                        <!--//conteo de titel-->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-meisa-black shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-meisa-red text-uppercase mb-1">
                                                Categorias</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $adm14;?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-newspaper fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                         <!--//conteo de titel-->
                         <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-meisa-black shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-meisa-red text-uppercase mb-1">
                                                Productos</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $adm15;?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-newspaper fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                         <!--//conteo de titel-->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-meisa-black shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-meisa-red text-uppercase mb-1">
                                              Equipo de Elevación</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $adm30;?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-newspaper fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-meisa-black shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-meisa-red text-uppercase mb-1">
                                              Motores</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $adm31;?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-newspaper fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer -->
            <?php include("assets/components/ui/footer.php"); ?>
            <!-- End of Footer -->
        </div>
    </div>
    <?php include("assets/components/ui/modal.php"); ?>
    <!-- Bootstrap core JavaScript-->
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="assets/js/sb-admin-2.min.js"></script>
</body>

</html>