<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#bf1520"/>
    <meta name="description" content="Meisa ofrece un amplio catálogo de productos de maquinaria, equipo y accesorios de cualquier ramo de la industria" />
    <title>Meisa - Light plants</title>
    <link rel="icon" type="image/png" sizes="32x32" href="../../assets/img/lg/meisa/sh.png">
    <link rel="preload" href="../../assets/css/style.css" as="style" onload="this.rel='stylesheet'">
    <link rel="preload" href="../../assets/css/btn.css" as="style" onload="this.rel='stylesheet'">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preload" href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500&display=swap" as="style" onload="this.rel='stylesheet'"> 
    <?php include_once "../../assets/components/boot.php"; ?>
</head>
<body>
    <main>
        <header>
            <div class="head__plan">
                <?php
                    include '../../assets/components/naveng.php';
                ?>
                 <!--First Text-->
                <section>
                   <div class="plan__meisa">
                        <h1>
                        LIGHT PLANTS
                        </h1>
                   </div>
                </section>
            <!--End-->
            </div>
        </header>
        <section>
            <div class="planta__meisa">
                        <?php
                           include '../../meisaback/adminmeisa/assets/components/backend/conexion.php';
                           $sql = "SELECT id_luz,titleluzeng,contentluzeng
                           FROM pageluz ORDER BY id_luz ASC"; 
                           $query = $mbd -> prepare($sql); 
                           $query -> execute(); 
                           $results = $query -> fetchAll(PDO::FETCH_OBJ); 
                              if($query -> rowCount() > 0){ 
                                 foreach($results as $result) { 
                                       $data = $result -> id_luz."||".
                                       $result -> titleluzeng."||".
                                       $result -> contentluzeng; 
                        ?>
                        <h2>
                           <?php echo $result -> titleluzeng; ?>  
                        </h2>
                        <div class="plan__parr">
                           <?php echo $result -> contentluzeng; ?>  
                        </div>
                        <?php }} ?>
            </div>
        </section>
        <!--Cards-->
        <section>
            <div class="cards__plan">
                <div class="content__cards__plan">
                     <?php
                        include '../../meisaback/adminmeisa/assets/components/backend/conexion.php';
                        $sql = "SELECT id_col,estado,prioridad,img,engtitle,engcont
                        FROM columnluz WHERE estado= '1' ORDER BY prioridad ASC"; 
                        $query = $mbd -> prepare($sql); 
                        $query -> execute(); 
                        $results = $query -> fetchAll(PDO::FETCH_OBJ); 
                            if($query -> rowCount() > 0){ 
                                foreach($results as $result) { 
                                    $data = $result -> id_col."||".
                                    $result -> prioridad."||".
                                    $result -> img."||".
                                    $result -> engtitle."||".
                                    $result -> engcont; 
                     ?>
                    <div class="cards__plant">
                        <div class="card__data__plan">
                            <div class="card__img__data__plan">
                                <img src="../../meisaback/adminmeisa/assets/<?php echo $result -> img; ?>" loading="lazy" alt="Meisa Mex <?php echo $result -> engtitle; ?>" title="Meisa Mex <?php echo $result -> engtitle; ?>" width="100" height="100">
                            </div>
                            <div class="card__data__text__plan">
                                <h2>
                                    <?php echo $result -> engtitle; ?>
                                </h2>
                            </div>
                        </div>
                    </div>
                    <?php }} ?>
                </div>
            </div>
        </section>
        <!--fondo-->
        <section>
            <div class="meisa__plan__red">
               <a href="https://meisamex.com.mx/en/Contac/">QUOTE HERE</a>
               <p>your new and used equipment we have inventory available</p>
            </div>
            <div class="meisa__manifon__plan">        
                <div class="meisa__centro__plan">
                    <h2>
                        <span class="subrayado__meisa">THE BEST OPTION</span>, WE HAVE IT
                    </h2>     
                    <p>
                    We have disused machinery, we supervise in detail to offer a purchase.
                    </p>        
                </div>
            </div>
        </section>
        <section>
            <?php
                include '../../assets/components/wh.php';
            ?>
        </section>
        <footer>
            <div class="sec__cont__foot">
                <?php
                    include '../../assets/components/footereng.php';
                ?>
            </div>
        </footer>
    </main>
    <?php
        include '../../assets/components/btn.php';
    ?>
    <div class="copy__lamm">
        <p>Copyright 2022, Todos los derechos reservados, desarrollado por Lamm Soluciones Digitales</p>
    </div>
    <script src="../../assets/js/menu.js"></script>
    <script src="../../assets/js/btn.js"></script>
</body>
</html>