<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#bf1520"/>
    <meta name="description" content="Meisa ofrece un amplio catálogo de productos de maquinaria, equipo y accesorios de cualquier ramo de la industria" />
    <title>Meisa - Maneuvers</title>
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
            <div class="head__maniobras">
                <?php
                    include '../../assets/components/naveng.php';
                ?>
                 <!--First Text-->
                <section>
                   <div class="mani__meisa">
                        <?php
                            include '../../meisaback/adminmeisa/assets/components/backend/conexion.php';
                            $sql = "SELECT id_mani,titlemanieng,contentmanieng
                            FROM maniobrameisa ORDER BY id_mani ASC"; 
                            $query = $mbd -> prepare($sql); 
                            $query -> execute(); 
                            $results = $query -> fetchAll(PDO::FETCH_OBJ); 
                                if($query -> rowCount() > 0){ 
                                    foreach($results as $result) { 
                                        $data = $result -> id_mani."||".
                                        $result -> titlemanieng."||".
                                        $result -> contentmanieng; 
                        ?>
                        <h1>
                            <?php echo $result -> titlemanieng; ?>  
                        </h1>
                        <div class="mani__parre">
                            <?php echo $result -> contentmanieng; ?>  
                        </div>
                        <?php }} ?>
                   </div>
                </section>
            <!--End-->
            </div>
        </header>
        <!--Cards-->
        <section>
            <div class="cards__mani">
                <div class="content__cards">
                    <div class="cards__manis">
                        <div class="card__data">
                            <div class="card__img__data">
                                <img src="../../assets/img/bg/22maq8975478954789.svg" loading="lazy" alt="Meisa Mex TRANSPORTATION OF LARGE PARTS" title="Meisa Mex TRANSPORTATION OF LARGE PARTS" width="100" height="100">
                            </div>
                            <div class="card__data__text">
                                <h2>
                                    TRANSPORTATION OF LARGE PARTS
                                </h2>
                            </div>
                        </div>
                    </div>
                    <div class="cards__manis">
                        <div class="card__data">
                            <div class="card__img__data">
                                <img src="../../assets/img/bg/22maq8975478954789.svg" loading="lazy" alt="Meisa Mex LOAD AND TRANSPORT" title="Meisa Mex LOAD AND TRANSPORT" width="100" height="100">
                            </div>
                            <div class="card__data__text">
                                <h2>
                                 LOAD AND TRANSPORT
                                </h2>
                            </div>
                        </div>
                    </div>
                    <div class="cards__manis">
                        <div class="card__data">
                            <div class="card__img__data">
                                <img src="../../assets/img/bg/22maq8975478954789.svg" loading="lazy" alt="Meisa Mex ASSEMBLY AND DISASSEMBLY OF MACHINERY" title="Meisa Mex ASSEMBLY AND DISASSEMBLY OF MACHINERY" width="100" height="100">
                            </div>
                            <div class="card__data__text">
                                <h2>
                                    ASSEMBLY AND DISASSEMBLY OF MACHINERY
                                </h2>
                            </div>
                        </div>
                    </div>
                    <div class="cards__manis">
                        <div class="card__data">
                            <div class="card__img__data">
                                <img src="../../assets/img/bg/22maq8975478954789.svg" loading="lazy" alt="Meisa Mex CRANE SERVICE" title="Meisa Mex CRANE SERVICE" width="100" height="100">
                            </div>
                            <div class="card__data__text">
                                <h2>
                                    CRANE SERVICE
                                </h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="content__cards">
                    <div class="cards__manis">
                        <div class="card__data">
                            <div class="card__img__data">
                                <img src="../../assets/img/bg/22maq8975478954789.svg" loading="lazy" alt="Meisa Mex MANEUVERS TO LOCAL AND FOREIGN COMPANIES" title="Meisa Mex MANEUVERS TO LOCAL AND FOREIGN COMPANIES" width="100" height="100">
                            </div>
                            <div class="card__data__text">
                                <h2>
                                   MANEUVERS TO LOCAL AND FOREIGN COMPANIES
                                </h2>
                            </div>
                        </div>
                    </div>
                    <div class="cards__manis">
                        <div class="card__data">
                            <div class="card__img__data">
                                <img src="../../assets/img/bg/22maq8975478954789.svg" loading="lazy" alt="Meisa Mex FORKLIFTS OF DIFFERENT CAPACITIES" title="Meisa Mex FORKLIFTS OF DIFFERENT CAPACITIES" width="100" height="100">
                            </div>
                            <div class="card__data__text">
                                <h2>
                                    FORKLIFTS OF DIFFERENT CAPACITIES
                                </h2>
                            </div>
                        </div>
                    </div>
                    <div class="cards__manis">
                        <div class="card__data">
                            <div class="card__img__data">
                                <img src="../../assets/img/bg/22maq8975478954789.svg" loading="lazy" alt="Meisa Mex ELEVATIONS OF STRUCTURES OR ANNOUNCEMENTS" title="Meisa Mex ELEVATIONS OF STRUCTURES OR ANNOUNCEMENTS" width="100" height="100">
                            </div>
                            <div class="card__data__text">
                                <h2>
                                    ELEVATIONS OF STRUCTURES OR ANNOUNCEMENTS
                                </h2>
                            </div>
                        </div>
                    </div>
                    <div class="cards__manis">
                        <div class="card__data">
                            <div class="card__img__data">
                                <img src="../../assets/img/bg/22maq8975478954789.svg" loading="lazy" alt="Meisa Mex MANEUVER AND EQUIPMENT WITH TRAINED PERSONNEL" title="Meisa Mex MANEUVER AND EQUIPMENT WITH TRAINED PERSONNEL" width="100" height="100">
                            </div>
                            <div class="card__data__text">
                                <h2>
                                 MANEUVER AND EQUIPMENT WITH TRAINED PERSONNEL
                                </h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--fondo-->
        <section>
            <div class="meisa__manifon">        
                <div class="meisa__centro">
                    <h2>
                        <span class="subrayado__meisa">DEVELOPMENT</span> OF OPERATIONAL PLAN
                    </h2>     
                    <p>
                        For the fulfillment of a safe maneuver with certified personnel guaranteeing its solution.
                    </p>        
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
    <script src="../../assets/js/form.js"></script>
    <script src="../../assets/js/btn.js"></script>
</body>
</html>