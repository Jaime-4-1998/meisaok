<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#bf1520"/>
    <meta name="description" content="Meisa ofrece un amplio catálogo de productos de maquinaria, equipo y accesorios de cualquier ramo de la industria" />
    <title>Meisa - Sales</title>
    <link rel="icon" type="image/png" sizes="32x32" href="../../assets/img/lg/meisa/sh.png">
    <link rel="preload" href="../../assets/css/style.css" as="style" onload="this.rel='stylesheet'">
    <link rel="preload" href="../../assets/css/inve.css" as="style" onload="this.rel='stylesheet'">
    <link rel="preload" href="../../assets/css/btn.css" as="style" onload="this.rel='stylesheet'">
    <link rel="preload" href="../../assets/css/jquery-ui.css" as="style" onload="this.rel='stylesheet'">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preload" href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500&display=swap" as="style" onload="this.rel='stylesheet'"> 
    <?php include_once "../../assets/components/boot.php"; ?>
</head>
<body>
    <main>
        <header>
            <div class="head__venta">
                <?php
                    include '../../assets/components/naveng.php';
                ?>
                 <!--First Text-->
                <section>
                   <div class="mani__meisa">
                        <h1>
                            SALE OF MACHINERY
                        </h1>
                        <p>
                            <div class="mani__parr">
                                Wide range of machinery for the industry (New, Semi-new).
                            </div>
                        </p>
                        <p>
                            <div class="mani__parr">
                                Buy 100% safe, we have the best quality and prices on the market. 
                            </div>
                        </p>
                   </div>
                </section>
            <!--End-->
            </div>
        </header>
        <!--Venta-->
        <section>
            <div class="meisa__productos">
                <div class="meisa__prod__one">
                    <div class="navbar">
                        <h2 class="mob__text">Categories</h2>
                        <div class="navbar__toggle" id="mobile-menu">
                            <span class="bar"></span>
                            <span class="bar"></span>
                            <span class="bar"></span>
                        </div>
                        <div class="navbar__menu">
                            <h2>Categories</h2>
                                        <?php
                                            $connect = new PDO("mysql:host=localhost;dbname=u557675164_titulacion", "root", "");
                                            $query = "SELECT DISTINCT(inve_catego) FROM inventario WHERE inve_estatus = 'Disponible' ORDER BY inve_id DESC";
                                            $statement = $connect->prepare($query);
                                            $statement->execute();
                                            $result = $statement->fetchAll();
                                            foreach($result as $row)
                                            {
                                        ?>
                                            <div class="checkbox">
                                                    <input type="checkbox" class="common_selector brand" id="<?php echo $row['inve_catego']; ?>" value="<?php echo $row['inve_catego']; ?>"  />
                                                    <label for="<?php echo $row['inve_catego']; ?>">
                                                        <span class="text"><?php echo $row['inve_catego']; ?></span>
                                                    </label>
                                            </div>
                                        <?php
                                            }
                                        ?>
                        </div>
                    </div>
                </div>
                <div class="meisa__prod__two">
                    <div class="products">
                        <div class="filter_data tercero__flex"></div>
                    </div>
                </div>
            </div>
        </section>
        <!--Atención-->
        <section>
            <div class="formu__mani">
                <div class="formulario__mani">
                    <div class="formu__partone">
                            <h2>REQUEST YOUR QUOTE</h2>
                            <button type="submit" id="submit" class="btn__mani">Send</button>
                            <small class="form__error ok fail" id="respuesta"></small>
                    </div>
                    <div class="formu__partwo">
                            <input type="text" name="" id="mail" placeholder="Your Email" class="atencion__mail form__mani">
                            <input type="text" name="" id="tema" placeholder="Machinery Description" class="atencion__mail form__mani">
                    </div>
                </div>
            </div>
        </section>
         <!--3 images-->
         <section>
            <div class="meisa__vent__text">
                <h2>GREAT VARIETY <strong><span class="subrayado__meisa">OF EQUIPMENT</span></strong></h2>
            </div>
            <div class="meisa__vent__imgs">
                
                    <?php
                        include '../../meisaback/adminmeisa/assets/components/backend/conexion.php';
                        $sql = "SELECT id_imgven,prioridad,img,titleeng
                        FROM imgvt ORDER BY prioridad ASC"; 
                        $query = $mbd -> prepare($sql); 
                        $query -> execute(); 
                        $results = $query -> fetchAll(PDO::FETCH_OBJ); 
                           if($query -> rowCount() > 0){ 
                                 foreach($results as $result) { 
                                    $data = $result -> id_imgven."||".
                                    $result -> prioridad."||".
                                    $result -> img."||".
                                    $result -> titleeng;
                    ?>
                <div class="meisa__contenedor">
                    <img src="../../meisaback/adminmeisa/assets/<?php echo $result -> img; ?>" loading="lazy" alt="Meisa Mex <?php echo $result -> titleeng; ?>" title="Meisa Mex <?php echo $result -> titleeng; ?>" width="100">
                    <span><div class="hast">#</div>Meisa</span>
                    <p><?php echo $result -> titleeng; ?></p>
                </div>
                <?php }} ?>
            </div>
         </section>
         <!--wh-->
         <section>
            <?php
                include '../../assets/components/wh.php';
            ?>
        </section>
        <footer>
            <?php
                include '../../assets/components/footereng.php';
            ?>
        </footer>
    </main>
    <?php
        include '../../assets/components/btn.php';
    ?>
    <div class="copy__lamm">
        <p>Copyright 2022, Todos los derechos reservados, desarrollado por Lamm Soluciones Digitales</p>
    </div>
    <script src="../../assets/js/new.js"></script>
    <script src="../../assets/js/btn.js"></script>
    <script src="../../assets/js/menu.js"></script>
    <script src="../../assets/js/form.js"></script> 
    <script src="../../assets/js/jquery-1.10.2.min.js"></script>
    <script src="../../assets/js/jquery-ui.js"></script>
    <script src="../../assets/js/filt.js"></script>
</body>
</html>