<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#bf1520"/>
    <meta name="description" content="Meisa ofrece un amplio catálogo de productos de maquinaria, equipo y accesorios de cualquier ramo de la industria" />
    <title>Meisa - Maniobras</title>
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
            <?php
                include '../assets/components/nav.php';
            ?>
        </header>
        <div class="head__maniobras margin__home__meisa">
            <!--First Text-->
            <section>
                   <div class="mani__meisa margen__maniobras">
                        <?php
                            include '../meisaback/adminmeisa/assets/components/backend/conexion.php';
                            $sql = "SELECT id_mani,titlemani,contentmani
                            FROM maniobrameisa ORDER BY id_mani ASC"; 
                            $query = $mbd -> prepare($sql); 
                            $query -> execute(); 
                            $results = $query -> fetchAll(PDO::FETCH_OBJ); 
                                if($query -> rowCount() > 0){ 
                                    foreach($results as $result) { 
                                        $data = $result -> id_mani."||".
                                        $result -> titlemani."||".
                                        $result -> contentmani; 
                        ?>
                        <h1>
                            <?php echo $result -> titlemani; ?>  
                        </h1>
                        <div class="mani__parre">
                            <?php echo $result -> contentmani; ?>  
                        </div>
                        <?php }} ?>
                   </div>
            </section>
            <!--End-->
        </div>
        <!--Cards-->
        <section>
            <div class="cards__mani margin__home__meisa">
                <div class="content__cards">
                    <div class="cards__manis">
                        <div class="card__data">
                            <div class="card__img__data">
                                <img src="../assets/img/bg/22maq8975478954789.svg" loading="lazy" alt="Meisa Mex TRANSPORTACIÓN DE PIEZAS VOLUMINOSAS" title="Meisa Mex TRANSPORTACIÓN DE PIEZAS VOLUMINOSAS" width="100" height="100">
                            </div>
                            <div class="card__data__text">
                                <h2>
                                    TRANSPORTACIÓN DE PIEZAS VOLUMINOSAS
                                </h2>
                            </div>
                        </div>
                    </div>
                    <div class="cards__manis">
                        <div class="card__data">
                            <div class="card__img__data">
                                <img src="../assets/img/bg/22maq8975478954789.svg" loading="lazy" alt="Meisa Mex CARGA Y TRANSPORTE" title="Meisa Mex CARGA Y TRANSPORTE" width="100" height="100">
                            </div>
                            <div class="card__data__text">
                                <h2>
                                    CARGA Y TRANSPORTE
                                </h2>
                            </div>
                        </div>
                    </div>
                    <div class="cards__manis">
                        <div class="card__data">
                            <div class="card__img__data">
                                <img src="../assets/img/bg/22maq8975478954789.svg" loading="lazy" alt="Meisa Mex MONTAJE Y DESMONTAJE  DE MAQUINARIA" title="Meisa Mex MONTAJE Y DESMONTAJE  DE MAQUINARIA" width="100" height="100">
                            </div>
                            <div class="card__data__text">
                                <h2>
                                    MONTAJE Y DESMONTAJE  DE MAQUINARIA
                                </h2>
                            </div>
                        </div>
                    </div>
                    <div class="cards__manis">
                        <div class="card__data">
                            <div class="card__img__data">
                                <img src="../assets/img/bg/22maq8975478954789.svg" loading="lazy" alt="Meisa Mex SERVICIO DE GRÚAS" title="Meisa Mex SERVICIO DE GRÚAS" width="100" height="100">
                            </div>
                            <div class="card__data__text">
                                <h2>
                                    SERVICIO DE GRÚAS
                                </h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="content__cards">
                    <div class="cards__manis">
                        <div class="card__data">
                            <div class="card__img__data">
                                <img src="../assets/img/bg/22maq8975478954789.svg" loading="lazy" alt="Meisa Mex MANIOBRAS A EMPRESAS LOCALES Y EXTRANJERAS" title="Meisa Mex MANIOBRAS A EMPRESAS LOCALES Y EXTRANJERAS" width="100" height="100">
                            </div>
                            <div class="card__data__text">
                                <h2>
                                   MANIOBRAS A EMPRESAS LOCALES Y EXTRANJERAS
                                </h2>
                            </div>
                        </div>
                    </div>
                    <div class="cards__manis">
                        <div class="card__data">
                            <div class="card__img__data">
                                <img src="../assets/img/bg/22maq8975478954789.svg" loading="lazy" alt="Meisa Mex MONTACARGAS DE DIFERENTES CAPACIDADES" title="Meisa Mex MONTACARGAS DE DIFERENTES CAPACIDADES" width="100" height="100">
                            </div>
                            <div class="card__data__text">
                                <h2>
                                    MONTACARGAS DE DIFERENTES CAPACIDADES
                                </h2>
                            </div>
                        </div>
                    </div>
                    <div class="cards__manis">
                        <div class="card__data">
                            <div class="card__img__data">
                                <img src="../assets/img/bg/22maq8975478954789.svg" loading="lazy" alt="Meisa Mex ELEVACIONES DE ESTRUCTURAS O ANUNCIOS" title="Meisa Mex ELEVACIONES DE ESTRUCTURAS O ANUNCIOS" width="100" height="100">
                            </div>
                            <div class="card__data__text">
                                <h2>
                                    ELEVACIONES DE ESTRUCTURAS O ANUNCIOS
                                </h2>
                            </div>
                        </div>
                    </div>
                    <div class="cards__manis">
                        <div class="card__data">
                            <div class="card__img__data">
                                <img src="../assets/img/bg/22maq8975478954789.svg" loading="lazy" alt="Meisa Mex MANIOBRA Y EQUIPO CON PERSONAL CAPACITADO" title="Meisa Mex MANIOBRA Y EQUIPO CON PERSONAL CAPACITADO" width="100" height="100">
                            </div>
                            <div class="card__data__text">
                                <h2>
                                    MANIOBRA Y EQUIPO CON PERSONAL CAPACITADO
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
                        <span class="subrayado__meisa">DESARROLL</span>O DE PLAN OPERATIVO
                    </h2>     
                    <p>
                        Para el cumplimiento de una maniobra segura con el personal certificado garantizando su solución.
                    </p>        
                </div>
            </div>
        </section>
         <!--Atención-->
         <section>
            <div class="formu__mani">
                <div class="formulario__mani">
                    <div class="formu__partone">
                            <h2>SOLICITA TU COTIZACIÓN</h2>
                            <button type="submit" id="submit" class="btn__mani">Enviar</button>
                            <small class="form__error ok fail" id="respuesta"></small>

                    </div>
                    <div class="formu__partwo">
                            <input type="text" name="" id="mail" placeholder="Escribe Tu Email" class="atencion__mail form__mani">
                            <input type="text" name="" id="tema" placeholder="Descripción de Maquinaria" class="atencion__mail form__mani">
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
    <script src="../assets/js/form.js"></script> 
    <script src="../assets/js/btn.js"></script>
</body>
</html>