<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#bf1520"/>
    <meta name="description" content="Meisa ofrece un amplio catálogo de productos de maquinaria, equipo y accesorios de cualquier ramo de la industria" />
    <title>Meisa</title>
    <link rel="icon" type="image/png" sizes="32x32" href="assets/img/lg/meisa/sh.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />
    <link rel="preload" href="assets/css/style.css" as="style" onload="this.rel='stylesheet'">
    <link rel="preload" href="assets/css/swpcarr.css" as="style" onload="this.rel='stylesheet'">
    <link rel="preload" href="assets/css/btn.css" as="style" onload="this.rel='stylesheet'">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preload" href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500&display=swap" as="style" onload="this.rel='stylesheet'"> 
</head>
<body>
    <main>
        <header>
            <div class="headere">
                <?php
                    include 'assets/components/nav.php';
                ?>
            <!--Carrusel-->
                <?php include_once "assets/func/func.php"; ?>
                <section>
                    <!-- Swiper -->
                    <div class="swiper mySwiper" id="swpi">
                        <div class="swiper-wrapper">
                            <?php $banners =  obtenerBanners(); ?>
                                <?php
                                    $i=0;
                                    foreach ($banners as $banerresult) { 
                                        if($i === 0){
                                ?>
                                    <div class="swiper-slide">
                                        <img src="meisaback/adminmeisa/assets/<?php echo $banerresult['img'] ?>" loading="lazy" title="<?php echo $banerresult['seo']?>" alt="<?php echo $banerresult['seo']?>" width="100" height="100" />
                                    </div>
                                <?php
                                    }else{
                                ?>
                                    <div class="swiper-slide">
                                        <img src="meisaback/adminmeisa/assets/<?php echo $banerresult['img'] ?>" loading="lazy" title="<?php echo $banerresult['seo']?>" alt="<?php echo $banerresult['seo']?>" width="100" height="100" />
                                    </div>
                                <?php
                                    }        
                                        $i++;
                                    }
                                ?>
                        </div>
                        <div class="swiper-button-next">
                            <img src="assets/img/lg/meisa/22arrow3890890.svg" loading="lazy" alt="Meisa Mex" title="Meisa Mex">
                        </div>
                        <div class="swiper-button-prev">
                            <img src="assets/img/lg/meisa/22rrow54897423789.svg" loading="lazy" alt="Meisa Mex" title="Meisa Mex">
                        </div>
                    </div>
                </section>
            <!--End-->
            </div>
        </header>
        <!--Acerca-->
        <section>
            <div class="acerca__meisa">
                <div class="acerca__meisa__text">
                    <?php
                        include 'meisaback/adminmeisa/assets/components/backend/conexion.php';
                        $sql = "SELECT id_home,title_one,desc_one
                        FROM home ORDER BY id_home ASC"; 
                        $query = $mbd -> prepare($sql); 
                        $query -> execute(); 
                        $results = $query -> fetchAll(PDO::FETCH_OBJ); 
                            if($query -> rowCount() > 0){ 
                                foreach($results as $result) { 
                                    $data = $result -> id_home."||".
                                    $result -> title_one."||".
                                    $result -> desc_one; 
                    ?>
                    <h1>
                        <?php echo $result -> title_one; ?>  
                    </h1>
                    <div>
                        <?php echo $result -> desc_one; ?>
                    </div>
                    <?php
                        }
                        }
                        ?>
                    <a href="https://meisamex.com.mx/Contacto/" class="acerca__btn">Más Información</a>
                </div>
                <div class="acerca__meisa__img">
                    <div class="acerca__imagen">
                        <img src="assets/img/bg/22maq8975478954789.svg" loading="lazy" alt="Meisa Mex" title="Meisa Mex" width="50" height="50"/>
                    </div>
                </div>
            </div>
            <div class="acerca__text__plus">
                        <?php
                            include 'meisaback/adminmeisa/assets/components/backend/conexion.php';
                            $sql = "SELECT id_home,titlesec,editorsecond
                            FROM hometwo ORDER BY id_home ASC"; 
                            $query = $mbd -> prepare($sql); 
                            $query -> execute(); 
                            $results = $query -> fetchAll(PDO::FETCH_OBJ); 
                                if($query -> rowCount() > 0){ 
                                    foreach($results as $result) { 
                                        $data = $result -> id_home."||".
                                        $result -> titlesec."||".
                                        $result -> editorsecond; 
                        ?>
                <div>
                    <?php echo $result -> editorsecond; ?>
                </div>
                <?php
                    }
                    }
                ?>
            </div>
        </section>
        <!--Servicios-->
        <section>
            <div class="row">
                <div class="ih-item square effect10 left_to_right">
                    <span class="meisa__hover">
                        <div class="img">
                            <img loading="lazy" src="assets/img/bg/colu/f06f3d4c37bedd0757668288ec801620.jpg" alt="Compra / Venta" title="Compra / Venta" width="100" />
                        </div>
                        <div class="info cam">
                            <h3>
                                <a href="https://meisamex.com.mx/Compra/" class="link__meisa__nuevo">Compra / Venta</a>                            
                            </h3>
                        </div>
                    </span>
                </div>
                                <div class="ih-item square effect10 left_to_right">
                    <span class="meisa__hover">
                        <div class="img">
                            <img loading="lazy" src="assets/img/bg/colu/12bffcd155e95d3297f271d34190a378.jpg" alt="Plantas de Luz" title="Plantas de Luz" width="100" />
                        </div>
                        <div class="info plant">
                            <h3>
                                <a href="https://meisamex.com.mx/PlantasdeLuz/" class="link__meisa__nuevo">Plantas de Luz</a>                         
                            </h3>
                        </div>
                    </span>
                </div>
                                <div class="ih-item square effect10 left_to_right">
                    <span class="meisa__hover">
                        <div class="img">
                            <img loading="lazy" src="assets/img/bg/colu/c61623eb5c366d767e5ce2178a7ea5ac.jpg" alt="Inventario" title="Inventario" width="100" />
                        </div>
                        <div class="info invet">
                            <h3>
                                <a href="https://meisamex.com.mx/Venta/" class="link__meisa__nuevo">Inventario</a>                         
                            </h3>
                        </div>
                    </span>
                </div>
                <div class="ih-item square effect10 left_to_right">
                        <span class="meisa__hover">
                            <div class="img">
                                <img loading="lazy" src="assets/img/bg/colu/7b80e8f58347b0448a23998458e88c0c.jpg" alt="Maniobra" title="Maniobra" width="100" />
                            </div>
                            <div class="info manit">
                                <h3>
                                    <a href="https://meisamex.com.mx/Maniobras/" class="link__meisa__nuevo">Maniobra</a>                            
                                </h3>
                            </div>
                        </span>
                    </div>
                </div>
        </section>
        <!--Clientes-->
        <section>
            <div class="clientes__meisa">
            <?php
                            include 'meisaback/adminmeisa/assets/components/backend/conexion.php';
                            $sql = "SELECT id_home,titlesec,editorsecond
                            FROM hometwo ORDER BY id_home ASC"; 
                            $query = $mbd -> prepare($sql); 
                            $query -> execute(); 
                            $results = $query -> fetchAll(PDO::FETCH_OBJ); 
                                if($query -> rowCount() > 0){ 
                                    foreach($results as $result) { 
                                        $data = $result -> id_home."||".
                                        $result -> titlesec."||".
                                        $result -> editorsecond; 
                        ?>
                <h2><?php echo $result -> titlesec; ?></h2>
                <?php
                    }
                    }
                ?>
            </div>
            <div class="logos__clientes__meisa">
                <div class="clientes__filas__logos">
                    <div class="logos__cards">
                        <img src="assets/img/clie/22lg1.svg" loading="lazy" alt="Gates Cliente de Meisa Mex" title="Gates Cliente de Meisa Mex" width="100" height="100"/>
                    </div>
                    <div class="logos__cards">
                        <img src="assets/img/clie/22lg2.svg" loading="lazy" alt="IEEM Cliente de Meisa Mex" title="IEEM Cliente de Meisa Mex" width="100" height="100"/>
                    </div>
                    <div class="logos__cards">
                        <img src="assets/img/clie/22lg3.svg" loading="lazy" alt="GoIndustry Dovebid Cliente de Meisa Mex" title="GoIndustry Dovebid Cliente de Meisa Mex" width="100" height="100"/>
                    </div>
                    <div class="logos__cards">
                        <img src="assets/img/clie/22lg4.svg" loading="lazy" alt="Thomson Cliente de Meisa Mex" title="Thomson Cliente de Meisa Mex" width="100" height="100"/>
                    </div>
                    <div class="logos__cards">
                        <img src="assets/img/clie/22lg5.svg" loading="lazy" alt="ABB Cliente de Meisa Mex" title="ABB Cliente de Meisa Mex" width="100" height="100"/>
                    </div>
                </div>
                <div class="clientes__filas__logos">
                    <div class="logos__cards">
                        <img src="assets/img/clie/22lg6.svg" loading="lazy" alt="Grupo Gypsa México Cliente de Meisa Mex" title="Grupo Gypsa México Cliente de Meisa Mex" width="100" height="100" />
                    </div>
                    <div class="logos__cards">
                        <img src="assets/img/clie/22lg7.svg" loading="lazy" alt="CawamAlexanderd Cliente de Meisa Mex" title="CawamAlexanderd Cliente de Meisa Mex" width="100" height="100" />
                    </div>
                    <div class="logos__cards">
                        <img src="assets/img/clie/22lg8.svg" loading="lazy" alt="Assets Remarketing Cliente de Meisa Mex" title="Assets Remarketing Cliente de Meisa Mex" width="100" height="100" />
                    </div>
                    <div class="logos__cards">
                        <img src="assets/img/clie/22lg9.svg" loading="lazy" alt="DANA Cliente de Meisa Mex" title="DANA Cliente de Meisa Mex" width="100" height="100" />
                    </div>
                    <div class="logos__cards">
                        <img src="assets/img/clie/22lg10.svg" loading="lazy" alt="Dovebid Cliente de Meisa Mex" title="Dovebid Cliente de Meisa Mex" width="100" height="100" />
                    </div>
                </div>
                <div class="clientes__filas__logos">
                    <div class="logos__cards">
                        <img src="assets/img/clie/22lg11.svg" loading="lazy" alt="Biozoo Cliente de Meisa Mex" title="Biozoo Cliente de Meisa Mex" width="100" height="100" />
                    </div>
                    <div class="logos__cards">
                        <img src="assets/img/clie/22lg12.svg" loading="lazy" alt="Clevite Engine Parts Cliente de Meisa Mex" title="Clevite Engine Parts Cliente de Meisa Mex" width="100" height="100" />
                    </div>
                    <div class="logos__cards">
                        <img src="assets/img/clie/22lg13.svg" loading="lazy" alt="Barrilito Cliente de Meisa Mex" title="Barrilito Cliente de Meisa Mex" width="100" height="100" />
                    </div>
                    <div class="logos__cards">
                        <img src="assets/img/clie/22lg14.svg" loading="lazy" alt="All-Temp Cliente de Meisa Mex" title="All-Temp Cliente de Meisa Mex" width="100" height="100" />
                    </div>
                    <div class="logos__cards">
                        <img src="assets/img/clie/22lg15.svg" loading="lazy" alt="kohler Engines Cliente de Meisa Mex" title="kohler Engines Cliente de Meisa Mex" width="100" height="100" />
                    </div>
                </div>
                <div class="clientes__filas__logos">
                    <div class="logos__cards">
                        <img src="assets/img/clie/22lg16.svg" loading="lazy" alt="GPLANTAS ELECTRICAS Cliente de Meisa Mex" title="GPLANTAS ELECTRICAS Cliente de Meisa Mex" width="100" height="100" />
                    </div>
                    <div class="logos__cards">
                        <img src="assets/img/clie/22lg17.svg" loading="lazy" alt="Cigatam Cliente de Meisa Mex" title="Cigatam Cliente de Meisa Mex" width="100" height="100" />
                    </div>
                    <div class="logos__cards">
                        <img src="assets/img/clie/22lg18.svg" loading="lazy" alt="CD Power Rent Cliente de Meisa Mex" title="CD Power Rent Cliente de Meisa Mex" width="100" height="100" />
                    </div>
                    <div class="logos__cards">
                        <img src="assets/img/clie/22lg19.svg" loading="lazy" alt="Philp Morris Cliente de Meisa Mex" title="Philp Morris Cliente de Meisa Mex" width="100" height="100" />
                    </div>
                    <div class="logos__cards">
                        <img src="assets/img/clie/22lg20.svg" loading="lazy" alt="Mitutoyo Cliente de Meisa Mex" title="Mitutoyo Cliente de Meisa Mex" width="100" height="100" />
                    </div>
                </div>
                <div class="clientes__filas__logos">
                    <div class="logos__cards">
                        <img src="assets/img/clie/22lg21.svg" loading="lazy" alt="Energisa Cliente de Meisa Mex" title="Energisa Cliente de Meisa Mex" width="100" height="100" />
                    </div>
                    <!--
                    <div class="logos__cards">
                        <img src="../assets/img/clie/22lg22.svg" loading="lazy" alt="Schneider Cliente de Meisa Mex" title="Schneider Cliente de Meisa Mex" width="100" height="100" />
                    </div>
                    <div class="logos__cards">
                        <img src="../assets/img/clie/22lg23.svg" loading="lazy" alt="Cummins Cliente de Meisa Mex" title="Cummins Cliente de Meisa Mex" width="100" height="100" />
                    </div>
                    -->
                    <div class="logos__cards">
                        <img src="assets/img/clie/22lg24.svg" loading="lazy" alt="Acoo Bands Cliente de Meisa Mex" title="Acoo Bands Cliente de Meisa Mex" width="100" height="100" />
                    </div>
                   <!--
                     <div class="logos__cards">
                        <img src="../assets/img/clie/22lg25.svg" loading="lazy" alt="Utillage Cliente de Meisa Mex" title="Utillage Cliente de Meisa Mex" width="100" height="100" />
                    </div>
                   -->
                </div>
            </div>
        </section>
        <!--Atención-->
        <section>
            <div class="atencion__meisa">
                <div class="atencion__meisa__textos">
                    <h2>Atención al cliente</h2>
                    <p>
                        Contáctanos para consultas de Compras, Ventas, Rentas, Avalúos ó Adquisiciones. Un ejecutivo se pondrá en contacto de inmediato. 
                    </p>
                </div>
                <div class="atencion__meisa__form">
                    <form  id="form">
                        <input type="email" name="" id="mail" placeholder="Escribe Tu Email" class="atencion__mail">
                        <textarea name="" id="tema" cols="10" rows="4" placeholder="Descripción de Cotización"></textarea>
                        <small class="form__error ok fail" id="respuesta"></small>
                        <button id="submit" type="submit">Enviar</button>
                    </form>
                </div>
            </div>
        </section>
        <section>
            <?php
                include 'assets/components/wh.php';
            ?>
        </section>
        <footer>
            <?php
                include 'assets/components/footer.php';
            ?>
        </footer>
    </main>
    <?php
        include 'assets/components/btn.php';
    ?>
    <div class="copy__lamm">
        <p>Copyright 2022, Todos los derechos reservados, desarrollado por Lamm Soluciones Digitales</p>
    </div>
    <script src="assets/js/btn.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
    <script src="assets/js/carrul.js"></script>
    <script src="assets/js/index.js"></script>
    <script src="assets/js/form.js"></script>
</body>
</html>