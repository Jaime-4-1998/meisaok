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
    <link rel="preload" href="../assets/css/style.css" as="style" onload="this.rel='stylesheet'">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preload" href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500&display=swap" as="style" onload="this.rel='stylesheet'"> 
</head>
<body>
    <main>
        <header>
            <?php
                include '../assets/components/naveng.php';
            ?>
            <!--Carrusel-->
            <?php 
                function obtenerBanners(){
                    include '../meisaback/adminmeisa/assets/components/backend/conexion.php';
                    $consulta = $mbd->prepare("SELECT * FROM banners ORDER BY prioridad ASC");
                    $consulta->execute();
                    return $consulta->fetchAll();
                }
            ?>
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
                                        <img src="../meisaback/adminmeisa/assets/<?php echo $banerresult['img'] ?>" loading="lazy" title="<?php echo $banerresult['seo']?>" alt="<?php echo $banerresult['seo']?>" width="100" height="100" />
                                    </div>
                                <?php
                                    }else{
                                ?>
                                    <div class="swiper-slide">
                                        <img src="../meisaback/adminmeisa/assets/<?php echo $banerresult['img'] ?>" loading="lazy" title="<?php echo $banerresult['seo']?>" alt="<?php echo $banerresult['seo']?>" width="100" height="100" />
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
        </header>
         <!--Acerca-->
         <section>
            <div class="acerca__meisa">
                <div class="acerca__meisa__text">
                        <?php
                            include '../meisaback/adminmeisa/assets/components/backend/conexion.php';
                            $sql = "SELECT id_home,title_eng,desc_oneng
                            FROM home ORDER BY id_home ASC"; 
                            $query = $mbd -> prepare($sql); 
                            $query -> execute(); 
                            $results = $query -> fetchAll(PDO::FETCH_OBJ); 
                                if($query -> rowCount() > 0){ 
                                    foreach($results as $result) { 
                                        $data = $result -> id_home."||".
                                        $result -> title_eng."||".
                                        $result -> desc_oneng; 
                        ?>
                    <h1>
                        <?php echo $result -> title_eng; ?>  
                    </h1>
                    <div>
                        <?php echo $result -> desc_oneng; ?>
                    </div>
                    <?php
                        }
                        }
                        ?>
                    <a href="https://meisamex.com.mx/Contact/" class="acerca__btn">More information</a>
                </div>
                <div class="acerca__meisa__img">
                    <div class="acerca__imagen">
                        <img src="../assets/img/bg/22maq8975478954789.svg" loading="lazy" alt="Meisa Mex" title="Meisa Mex" width="50" height="50"/>
                    </div>
                </div>
            </div>
            <div class="acerca__text__plus">
                        <?php
                            include '../meisaback/adminmeisa/assets/components/backend/conexion.php';
                            $sql = "SELECT id_home,titleseceng,editorsecondeng
                            FROM hometwo ORDER BY id_home ASC"; 
                            $query = $mbd -> prepare($sql); 
                            $query -> execute(); 
                            $results = $query -> fetchAll(PDO::FETCH_OBJ); 
                                if($query -> rowCount() > 0){ 
                                    foreach($results as $result) { 
                                        $data = $result -> id_home."||".
                                        $result -> titleseceng."||".
                                        $result -> editorsecondeng; 
                        ?>
                <div>
                    <?php echo $result -> editorsecondeng; ?>
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
                <?php
                    include '../meisaback/adminmeisa/assets/components/backend/conexion.php';
                    $sql = "SELECT id_col,prioridad,img,title,content
                    FROM columnfour ORDER BY prioridad ASC"; 
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
                <div class="ih-item square effect10 left_to_right">
                    <span class="meisa__hover">
                        <div class="img">
                            <img loading="lazy" src="../meisaback/adminmeisa/assets/<?php echo $result -> img; ?>" alt="<?php echo $result -> title; ?>" title="<?php echo $result -> title; ?>" width="100" />
                        </div>
                        <div class="info cam">
                            <h3>
                                <span class="main__line"></span>
                                <?php echo $result -> title; ?>
                            </h3>
                        </div>
                    </span>
                </div>
                <?php
                }
                }
                ?>
            </div>
        </section>
        <!--Clientes-->
        <section>
            <div class="clientes__meisa">
            <?php
                            include '../meisaback/adminmeisa/assets/components/backend/conexion.php';
                            $sql = "SELECT id_home,titleseceng,editorsecond
                            FROM hometwo ORDER BY id_home ASC"; 
                            $query = $mbd -> prepare($sql); 
                            $query -> execute(); 
                            $results = $query -> fetchAll(PDO::FETCH_OBJ); 
                                if($query -> rowCount() > 0){ 
                                    foreach($results as $result) { 
                                        $data = $result -> id_home."||".
                                        $result -> titleseceng."||".
                                        $result -> editorsecond; 
                        ?>
                  <h2><?php echo $result -> titleseceng; ?></h2>
                <?php
                    }
                    }
                ?>
            </div>
            <div class="logos__clientes__meisa">
                <div class="clientes__filas__logos">
                    <div class="logos__cards">
                        <img src="../assets/img/clie/22lg1.svg" loading="lazy" alt="Gates Cliente de Meisa Mex" title="Gates Cliente de Meisa Mex" width="100" height="100"/>
                    </div>
                    <div class="logos__cards">
                        <img src="../assets/img/clie/22lg2.svg" loading="lazy" alt="IEEM Cliente de Meisa Mex" title="IEEM Cliente de Meisa Mex" width="100" height="100"/>
                    </div>
                    <div class="logos__cards">
                        <img src="../assets/img/clie/22lg3.svg" loading="lazy" alt="GoIndustry Dovebid Cliente de Meisa Mex" title="GoIndustry Dovebid Cliente de Meisa Mex" width="100" height="100"/>
                    </div>
                    <div class="logos__cards">
                        <img src="../assets/img/clie/22lg4.svg" loading="lazy" alt="Thomson Cliente de Meisa Mex" title="Thomson Cliente de Meisa Mex" width="100" height="100"/>
                    </div>
                    <div class="logos__cards">
                        <img src="../assets/img/clie/22lg5.svg" loading="lazy" alt="ABB Cliente de Meisa Mex" title="ABB Cliente de Meisa Mex" width="100" height="100"/>
                    </div>
                </div>
                <div class="clientes__filas__logos">
                    <div class="logos__cards">
                        <img src="../assets/img/clie/22lg6.svg" loading="lazy" alt="Grupo Gypsa México Cliente de Meisa Mex" title="Grupo Gypsa México Cliente de Meisa Mex" width="100" height="100" />
                    </div>
                    <div class="logos__cards">
                        <img src="../assets/img/clie/22lg7.svg" loading="lazy" alt="CawamAlexanderd Cliente de Meisa Mex" title="CawamAlexanderd Cliente de Meisa Mex" width="100" height="100" />
                    </div>
                    <div class="logos__cards">
                        <img src="../assets/img/clie/22lg8.svg" loading="lazy" alt="Assets Remarketing Cliente de Meisa Mex" title="Assets Remarketing Cliente de Meisa Mex" width="100" height="100" />
                    </div>
                    <div class="logos__cards">
                        <img src="../assets/img/clie/22lg9.svg" loading="lazy" alt="DANA Cliente de Meisa Mex" title="DANA Cliente de Meisa Mex" width="100" height="100" />
                    </div>
                    <div class="logos__cards">
                        <img src="../assets/img/clie/22lg10.svg" loading="lazy" alt="Dovebid Cliente de Meisa Mex" title="Dovebid Cliente de Meisa Mex" width="100" height="100" />
                    </div>
                </div>
                <div class="clientes__filas__logos">
                    <div class="logos__cards">
                        <img src="../assets/img/clie/22lg11.svg" loading="lazy" alt="Biozoo Cliente de Meisa Mex" title="Biozoo Cliente de Meisa Mex" width="100" height="100" />
                    </div>
                    <div class="logos__cards">
                        <img src="../assets/img/clie/22lg12.svg" loading="lazy" alt="Clevite Engine Parts Cliente de Meisa Mex" title="Clevite Engine Parts Cliente de Meisa Mex" width="100" height="100" />
                    </div>
                    <div class="logos__cards">
                        <img src="../assets/img/clie/22lg13.svg" loading="lazy" alt="Barrilito Cliente de Meisa Mex" title="Barrilito Cliente de Meisa Mex" width="100" height="100" />
                    </div>
                    <div class="logos__cards">
                        <img src="../assets/img/clie/22lg14.svg" loading="lazy" alt="All-Temp Cliente de Meisa Mex" title="All-Temp Cliente de Meisa Mex" width="100" height="100" />
                    </div>
                    <div class="logos__cards">
                        <img src="../assets/img/clie/22lg15.svg" loading="lazy" alt="kohler Engines Cliente de Meisa Mex" title="kohler Engines Cliente de Meisa Mex" width="100" height="100" />
                    </div>
                </div>
                <div class="clientes__filas__logos">
                    <div class="logos__cards">
                        <img src="../assets/img/clie/22lg16.svg" loading="lazy" alt="GPLANTAS ELECTRICAS Cliente de Meisa Mex" title="GPLANTAS ELECTRICAS Cliente de Meisa Mex" width="100" height="100" />
                    </div>
                    <div class="logos__cards">
                        <img src="../assets/img/clie/22lg17.svg" loading="lazy" alt="Cigatam Cliente de Meisa Mex" title="Cigatam Cliente de Meisa Mex" width="100" height="100" />
                    </div>
                    <div class="logos__cards">
                        <img src="../assets/img/clie/22lg18.svg" loading="lazy" alt="CD Power Rent Cliente de Meisa Mex" title="CD Power Rent Cliente de Meisa Mex" width="100" height="100" />
                    </div>
                    <div class="logos__cards">
                        <img src="../assets/img/clie/22lg19.svg" loading="lazy" alt="Philp Morris Cliente de Meisa Mex" title="Philp Morris Cliente de Meisa Mex" width="100" height="100" />
                    </div>
                    <div class="logos__cards">
                        <img src="../assets/img/clie/22lg20.svg" loading="lazy" alt="Mitutoyo Cliente de Meisa Mex" title="Mitutoyo Cliente de Meisa Mex" width="100" height="100" />
                    </div>
                </div>
                <div class="clientes__filas__logos">
                    <div class="logos__cards">
                        <img src="../assets/img/clie/22lg21.svg" loading="lazy" alt="Energisa Cliente de Meisa Mex" title="Energisa Cliente de Meisa Mex" width="100" height="100" />
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
                        <img src="../assets/img/clie/22lg24.svg" loading="lazy" alt="Acoo Bands Cliente de Meisa Mex" title="Acoo Bands Cliente de Meisa Mex" width="100" height="100" />
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
                    <h2>Customer Support</h2>
                    <p>
                        Contact us for inquiries about Purchases, Sales, Rents, Appraisals or Acquisitions. An executive will contact you immediately.
                    </p>
                </div>
                <div class="atencion__meisa__form">
                    <form action="" method="post">
                        <input type="email" name="" id="" placeholder="Write your Email" class="atencion__mail">
                        <textarea name="" id="" cols="10" rows="4" placeholder="Quote Description"></textarea>
                        <button type="submit">Send</button>
                    </form>
                </div>
            </div>
         </section>
        <footer>
            <?php
                include '../assets/components/footereng.php';
            ?>
        </footer>
    </main>
    <div class="copy__lamm">
        <p>Copyright 2022, Todos los derechos reservados, desarrollado por Lamm Soluciones Digitales</p>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
    <script src="../assets/js/carrul.js"></script>
    <script src="../assets/js/index.js"></script>
</body>
</html>