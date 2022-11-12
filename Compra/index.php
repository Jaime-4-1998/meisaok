<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#bf1520"/>
    <meta name="description" content="Meisa ofrece un amplio catálogo de productos de maquinaria, equipo y accesorios de cualquier ramo de la industria" />
    <title>Meisa - Compras</title>
    <link rel="icon" type="image/png" sizes="32x32" href="../assets/img/lg/meisa/sh.png">
    <link rel="preload" href="../assets/css/margins.css" as="style" onload="this.rel='stylesheet'">
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
            <div class="head__com">
                <?php
                    include '../assets/components/nav.php';
                ?>
                 <!--First Text-->
                <section>
                   <div class="mani__meisa com__margin">
                        <?php
                            include '../meisaback/adminmeisa/assets/components/backend/conexion.php';
                            $sql = "SELECT id_rent,titlerent,contentrent
                            FROM rentainf ORDER BY id_rent ASC"; 
                            $query = $mbd -> prepare($sql); 
                            $query -> execute(); 
                            $results = $query -> fetchAll(PDO::FETCH_OBJ); 
                                if($query -> rowCount() > 0){ 
                                    foreach($results as $result) { 
                                        $data = $result -> id_rent."||".
                                        $result -> titlerent."||".
                                        $result -> contentrent; 
                        ?>
                        <h1>
                            <?php echo $result -> titlerent; ?>  
                        </h1>
                        <div class="com__parr">
                            <?php echo $result -> contentrent; ?>  
                        </div>
                        <?php }} ?>
                   </div>
                </section>
            <!--End-->
            </div>
        </header>
        <section>
           <div class="sect__compras__new margin__home__meisa">
                <div class="sect__sales__container">
                    <h2>Compra de Maquinaria</h2>
                    <p>Nueva, seminueva, en regular estado y desecho ferroso.</p>
                    <p>Contamos con una gran variedad de maquinaria para la industria.</p>
                    <p>Motores, moto reductores, bombas, compresores, plantas de luz, maquinas de inyección, compresores de enfriamiento, montacargas, etc.</p>
                </div>
           </div>
       </section>
        <!--Atención-->
        <section>
            <div class="atencion__meisa atenttion__meisa margin__home__meisa margin__home__meisa__resp">
                <div class="atencion__meisa__textos">
                    <h2>TE COMPRAMOS TU MAQUINARIA</h2>
                    <p>
                        Contáctanos para consultas de Compras de maquinaria en desuso, supervisamos a detalle para ofrecer una compra. 
                    </p>
                </div>
                <div class="atencion__meisa__form">
                    <form action="" method="post">
                        <input type="email" name="" id="" placeholder="Escribe Tu Email" class="atencion__mail">
                        <textarea name="" id="" cols="10" rows="4" placeholder="Descripción de Cotización"></textarea>
                        <button type="submit">Enviar</button>
                    </form>
                </div>
            </div>
        </section>
        <!--fondo-->
        <section>
            <div class="meisa__manifon__comp">        
                <div class="meisa__centro">
                    <h2>
                        <span class="subrayado__meisa">INVE</span>NTARIO DE MAQUINARIA
                    </h2>     
                    <p>Gran variedad de maquinaria:</p>        
                    <p>
                        Motores, Moto reductores, Bombas, Compresores, Compresores de enfriamiento, Plantas de luz, Maquinas de inyección, Montacargas, etc.
                    </p>
                    <div class="meisa__img__com">
                        <a href="https://meisamex.com.mx/Venta/">
                            <img src="../assets/img/bg/com/22Icono90.svg" alt="Meisa Mex Inventario" title="Meisa Mex Inventario">
                        </a>
                    </div>
                </div>
            </div>
        </section>
         
         <section>
            <?php
                include '../assets/components/wh.php';
            ?>
        </section>
        <footer>
            <?php
                include '../assets/components/footer.php';
            ?>
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