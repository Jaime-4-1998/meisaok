<!DOCTYPE html>
<html lang="es">
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="icon" type="image/png" sizes="32x32" href="../../assets/img/lg/icon.png">
      <meta name="theme-color" content="#bf1520"/>
      <meta name="description" content="Meisa ofrece un amplio catálogo de productos de maquinaria, equipo y accesorios de cualquier ramo de la industria" />
      <title>Meisa - Renta de Equipos</title>
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />
      <link rel="preload" href="../../assets/css/style.css" as="style" onload="this.rel='stylesheet'">
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link rel="preload" href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500&display=swap" as="style" onload="this.rel='stylesheet'"> 
    </head>
<body>
    <header>
         <div class="header">
            <div class="first__column__head">
               <div class="img__head">
                  <img src="../../assets/img/lg/9800mei039087053.svg" loading="lazy" alt="Meisa MX" title="Meisa MX" width="50" height="100"/>
               </div>
            </div>
            <div class="second__column__head">
               <div class="content__header">
               <a href="../../">Version Español (Clic Aquí)</a>
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
            include '../../assets/components/naveng.php';
        ?>
    </nav>
    <section>
         <a href="https://api.whatsapp.com/send?phone=5215535688727&text=Hola!&nbsp;me&nbsp;pueden&nbsp;apoyar?" target="_blank">
         <img src="../../assets/img/art/whatsappsvg.svg" loading="lazy" alt="Contacto de Meisa MX" title="Contacto de Meisa MX" class="icon__wh" width="4" height="100" />
         </a>
    </section>
    <!--Content-->
    <section>
         <div class="content__homme">
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
               <div class="title__homme">
                  <?php echo $result -> titlerenteng; ?>  
               </div>
            </h1>
            
            <div class="parr__homme">
               <?php echo $result -> contentrenteng; ?>
            </div>
            
            <?php
               }
               }
            ?>
            
         </div>
    </section>
    <!--End-->
    <!--Columns-->
    <div class="grid__rent">
            <?php
                include '../../meisaback/adminmeisa/assets/components/backend/conexion.php';
                $sql = "SELECT id_col,prioridad,img,engtitle,engcont
                FROM columntwo ORDER BY prioridad ASC"; 
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
         <div class="flex__col esp__rent">
            <h2>
                <div class="flex__title">
                    <?php echo $result -> engtitle; ?>
                </div>
            </h2>
            <img class="img__rent" loading="lazy" src="../../meisaback/adminmeisa/assets/<?php echo $result -> img; ?>" alt="<?php echo $result -> engtitle; ?>" title="<?php echo $result -> engtitle; ?>" width="50" height="50" />
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
            include '../../assets/components/footer.php';
        ?>
    </footer>
    <script src="../../assets/js/index.js"></script>
</body>
</html>
