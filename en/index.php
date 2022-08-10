<!DOCTYPE html>
<html lang="es">
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="icon" type="image/png" sizes="32x32" href="assets/img/lg/icon.png">
      <meta name="theme-color" content="#bf1520"/>
      <meta name="description" content="Meisa ofrece un amplio catálogo de productos de maquinaria, equipo y accesorios de cualquier ramo de la industria" />
      <title>Meisa</title>
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />
      <link rel="preload" href="../assets/css/style.css" as="style" onload="this.rel='stylesheet'">
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link rel="preload" href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500&display=swap" as="style" onload="this.rel='stylesheet'"> 
    </head>
<body>
    <header>
         <div class="header">
            <div class="first__column__head">
               <div class="img__head">
                  <img src="../assets/img/lg/9800mei039087053.svg" loading="lazy" alt="Meisa MX" title="Meisa MX" width="50" height="100"/>
               </div>
            </div>
            <div class="second__column__head">
               <div class="content__header">
                  <a href="en/">English Version</a>
                  <a href="tel:8006347269">800-634-7269</a>
                  <input type="text" name="" id="" class="input__content">
               </div>
            </div>
         </div>
         <hr class="color__red">
         </hr>
         <hr class="color__white">
         </hr>
         <hr class="color__black">
         </hr>
    </header>
    <nav>
        <?php
            include '../assets/components/naveng.php';
        ?>
    </nav>
    <section>
         <a href="https://api.whatsapp.com/send?phone=5215535688727&text=Hola!&nbsp;me&nbsp;pueden&nbsp;apoyar?" target="_blank">
         <img src="../assets/img/art/whatsappsvg.svg" loading="lazy" alt="Contacto de Meisa MX" title="Contacto de Meisa MX" class="icon__wh" width="4" height="100" />
         </a>
    </section>
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
        <div class="swiper mySwiper">
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
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-pagination"></div>
        </div>
     </section>
    <!--End-->
     <!--Content-->
     <section>
         <div class="content__homme">
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
               <div class="title__homme">
                  <?php echo $result -> title_eng; ?>  
               </div>
            </h1>
            
            <div class="parr__homme">
               <?php echo $result -> desc_oneng; ?>
            </div>
            
            <?php
               }
               }
            ?>
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
            <h2>
               <div class="title__homme">
                  <?php echo $result -> titleseceng; ?>  
               </div>
            </h2>
           
            <div class="parr__homme">
               <?php echo $result -> editorsecondeng; ?>
            </div>
            
            <?php
               }
               }
               ?>
         </div>
     </section>
     <!--End-->
     <!--Columns-->
     <div class="grid">
                <?php
                    include '../meisaback/adminmeisa/assets/components/backend/conexion.php';
                    $sql = "SELECT id_col,prioridad,img,engtitle,engcont
                    FROM columnfour ORDER BY prioridad ASC"; 
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
            <div class="flex__col">
                <h2>
                    <div class="flex__title">
                        <?php echo $result -> engtitle; ?>
                    </div>
                </h2>
                <img class="imgh" loading="lazy" src="../meisaback/adminmeisa/assets/<?php echo $result -> img; ?>" alt="<?php echo $result -> engtitle; ?>" title="<?php echo $result -> engtitle; ?>" width="35" height="35" />
                
                    <div class="flex__parr">
                        
                        <?php echo $result -> engcont; ?>
                        
                    </div>
                
            </div>
            <?php
                }
                }
                ?>
     </div>
     <!--End-->
    <section>
        <iframe title="Ubicación de Meisa MX" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3765.560208665229!2d-99.56701140850782!3d19.30148236724018!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85cd8abd8654e1a1%3A0xc0dbdbabbf1a84bf!2sSegunda%205%20de%20Mayo%2020%2C%20Reforma%2C%20Delegaci%C3%B3n%20Santa%20Mar%C3%ADa%20Totoltepec%2C%2052100%20Toluca%20de%20Lerdo%2C%20M%C3%A9x.!5e0!3m2!1ses!2smx!4v1658210888350!5m2!1ses!2smx" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </section>
    <footer>
        <?php
            include '../assets/components/footer.php';
        ?>
    </footer>
    <script src="../assets/js/index.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
    <script src="../assets/js/carru.js"></script>
</body>
</html>
