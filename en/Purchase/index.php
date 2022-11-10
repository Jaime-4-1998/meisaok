<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#bf1520"/>
    <meta name="description" content="Meisa ofrece un amplio catálogo de productos de maquinaria, equipo y accesorios de cualquier ramo de la industria" />
    <title>Meisa - Purchase</title>
    <link rel="icon" type="image/png" sizes="32x32" href="../../assets/img/lg/meisa/sh.png">
    <link rel="preload" href="../../assets/css/margins.css" as="style" onload="this.rel='stylesheet'">
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
            <div class="head__com">
                <?php
                    include '../../assets/components/naveng.php';
                ?>
                 <!--First Text-->
                <section>
                   <div class="mani__meisa com__margin">
                        <?php
                            include '../../meisaback/adminmeisa/assets/components/backend/conexion.php';
                            $sql = "SELECT id_rent,titlerenteng,contentrenteng
                            FROM rentainf ORDER BY id_rent ASC"; 
                            $query = $mbd -> prepare($sql); 
                            $query -> execute(); 
                            $results = $query -> fetchAll(PDO::FETCH_OBJ); 
                                if($query -> rowCount() > 0){ 
                                    foreach($results as $result) { 
                                        $data = $result -> id_rent."||".
                                        $result -> titlerenteng."||".
                                        $result -> contentrenteng; 
                        ?>
                        <h1>
                            <?php echo $result -> titlerenteng; ?>  
                        </h1>
                        <div class="com__parr">
                            <?php echo $result -> contentrenteng; ?>  
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
                    <h2>Purchase of machinery</h2>
                    <p>New, semi-new, in fair condition and ferrous waste.</p>
                    <p>We have a wide variety of machinery for the industry.</p>
                    <p>Motors, motor reducers, pumps, compressors, power plants, injection machines, cooling compressors, forklifts, etc.</p>
                </div>
           </div>
        </section>
        <!--Atención-->
        <section>
            <div class="atencion__meisa margin__home__meisa">
                <div class="atencion__meisa__textos">
                    <h2>WE BUY YOUR MACHINERY</h2>
                    <p>
                    Contact us for inquiries on Purchases of disused machinery, we supervise in detail to offer a purchase.
                    </p>
                </div>
                <div class="atencion__meisa__form">
                    <form action="" method="post">
                        <input type="email" name="" id="" placeholder="Write your email" class="atencion__mail">
                        <textarea name="" id="" cols="10" rows="4" placeholder="Quote Description"></textarea>
                        <button type="submit">Send</button>
                    </form>
                </div>
            </div>
         </section>
        <!--fondo-->
        <section>
            <div class="meisa__manifon__comp">        
                <div class="meisa__centro">
                    <h2>
                        MACHINERY <span class="subrayado__meisa">INVE</span>NTORY
                    </h2>     
                    <p>Wide variety of machinery:</p>        
                    <p>
                        Motors, geared motors, pumps, compressors, cooling compressors, power plants, injection machines, forklifts, etc.
                    </p>
                    <div class="meisa__img__com">
                        <img src="../../assets/img/bg/com/22eng8974389743.svg" alt="Meisa Mex Inventario" title="Meisa Mex Inventario">
                    </div>
                </div>
            </div>
        </section>
         
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
    <script src="../../assets/js/menu.js"></script>
    <script src="../../assets/js/btn.js"></script>
</body>
</html>