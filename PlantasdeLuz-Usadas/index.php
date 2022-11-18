<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#bf1520"/>
    <meta name="description" content="Meisa ofrece un amplio catálogo de productos de maquinaria, equipo y accesorios de cualquier ramo de la industria" />
    <title>Meisa - Plantas de Luz Usadas</title>
    <link rel="icon" type="image/png" sizes="32x32" href="../assets/img/lg/meisa/sh.png">
    <link rel="preload" href="../assets/css/style.css" as="style" onload="this.rel='stylesheet'">
    <link rel="preload" href="../assets/css/btn.css" as="style" onload="this.rel='stylesheet'">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preload" href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500&display=swap" as="style" onload="this.rel='stylesheet'"> 
    <?php include_once "../assets/components/boot.php"; ?>
</head>
<body>
    <main>
        <header>
            <div class="head__plan">
                <?php
                    include '../assets/components/nav.php';
                ?>
                 <!--First Text-->
                <section>
                   <div class="plan__meisa">
                        <h1>
                           PLANTAS DE LUZ USADAS
                        </h1>
                   </div>
                </section>
            <!--End-->
            </div>
        </header>
        <section>
            <div class="planta__meisa">
                        <?php
                           include '../meisaback/adminmeisa/assets/components/backend/conexion.php';
                           $sql = "SELECT id_luz,titleluz,contentluz
                           FROM pageluz ORDER BY id_luz ASC"; 
                           $query = $mbd -> prepare($sql); 
                           $query -> execute(); 
                           $results = $query -> fetchAll(PDO::FETCH_OBJ); 
                              if($query -> rowCount() > 0){ 
                                 foreach($results as $result) { 
                                       $data = $result -> id_luz."||".
                                       $result -> titleluz."||".
                                       $result -> contentluz; 
                        ?>
                        <h2>
                           <?php echo $result -> titleluz; ?>  
                        </h2>
                        <div class="plan__parr">
                           <?php echo $result -> contentluz; ?>  
                        </div>
                        <?php }} ?>
            </div>
        </section>
        <!--Cards-->
        <section>
            <div class="cards__plan">
                <div class="content__cards__plan">
                     <?php
                        include '../meisaback/adminmeisa/assets/components/backend/conexion.php';
                        $sql = "SELECT id_col,estado,prioridad,img,title,content
                        FROM columnluz WHERE estado= '0' ORDER BY prioridad ASC"; 
                        $query = $mbd -> prepare($sql); 
                        $query -> execute(); 
                        $results = $query -> fetchAll(PDO::FETCH_OBJ); 
                           if($query -> rowCount() > 0){ 
                                 foreach($results as $result) { 
                                    $data = $result -> id_col."||".
                                    $result -> prioridad."||".
                                    $result -> img."||".
                                    $result -> title."||".
                                    $result -> content; 
                     ?>
                    <div class="cards__plant">
                        <div class="card__data__plan">
                            <div class="card__img__data__plan">
                                <img src="../meisaback/adminmeisa/assets/<?php echo $result -> img; ?>" loading="lazy" alt="Meisa Mex <?php echo $result -> title; ?>" title="Meisa Mex <?php echo $result -> title; ?>" width="100" height="100">
                            </div>
                            <div class="card__data__text__plan">
                                <h2>
                                    <?php echo $result -> title; ?>
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
               <a href="https://meisamex.com.mx/Contacto/">COTIZA AQUÍ</a>
               <p>tus equipos nuevos y usados tenemos inventario disponible</p>
            </div>
            <div class="meisa__manifon__plan">        
                <div class="meisa__centro__plan">
                    <h2>
                        <span class="subrayado__meisa">LA MEJOR O</span>PCIÓN, LA TENEMOS NOSOTROS
                    </h2>     
                    <p>
                    Contámos con maquinaria en desuso, supervisamos a detalle para ofrecer una compra. 
                    </p>        
                </div>
            </div>
        </section>
        <section>
            <?php
                include '../assets/components/wh.php';
            ?>
        </section>
        <footer>
            <div class="sec__cont__foot">
                <?php
                    include '../assets/components/footer.php';
                ?>
            </div>
        </footer>
    </main>
    <?php
        include '../assets/components/btn.php';
    ?>
    <div class="copy__lamm">
        <p>Copyright 2022, Todos los derechos reservados, desarrollado por Lamm Soluciones Digitales</p>
    </div>
    <script src="../assets/js/menu.js"></script>
    <script src="../assets/js/btn.js"></script>
</body>
</html>