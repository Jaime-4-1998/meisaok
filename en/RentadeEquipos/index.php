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
                  <form id="head-search" class="head-search" action="/search/">
                        <div class="form-row">
                            <label class="sr-only labele" for="head-search-keyword">Search</label>
                            <input id="head-search-keyword" class="form-control input-lg" type="text" requiered placeholder="Search a Machine">
                            <button id="btn-head-search" type="button" class="btn btn-lg"><img src="https://meisamex.com.mx/assets/img/art/bi_search.svg" alt=""><span class="sr-only">Search</span></button>
                        </div>
                    </form>
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
    <footer>
        <?php
            include '../assets/components/footeren.php';
        ?>
    </footer>
    <script src="../../assets/js/index.js"></script>
</body>
</html>
