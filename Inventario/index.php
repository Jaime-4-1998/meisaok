<!DOCTYPE html>
<html lang="es">
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="icon" type="image/png" sizes="32x32" href="../assets/img/lg/icon.png">
      <meta name="theme-color" content="#bf1520"/>
      <meta name="description" content="Meisa ofrece un amplio catálogo de productos de maquinaria, equipo y accesorios de cualquier ramo de la industria" />
      <title>Meisa - Inventario de Equipos</title>
      <link rel="preload" href="../assets/css/style.css" as="style" onload="this.rel='stylesheet'">
      <link rel="stylesheet" href="../assets/css/jquery-ui.css">
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
            include '../assets/components/nav.php';
        ?>
    </nav>
    <section>
         <a href="https://api.whatsapp.com/send?phone=5215535688727&text=Hola!&nbsp;me&nbsp;pueden&nbsp;apoyar?" target="_blank">
         <img src="../assets/img/art/whatsappsvg.svg" loading="lazy" alt="Contacto de Meisa MX" title="Contacto de Meisa MX" class="icon__wh" width="4" height="100" />
         </a>
    </section>
   <!--Filtro-->
   <section>
        <div class="container">
        	
            <div class="col-md-3">                				
				<div class="list-group">
					<h3>Precio</h3>
					<input type="hidden" id="hidden_minimum_price" value="0" />
                    <input type="hidden" id="hidden_maximum_price" value="65000" />
                    <p id="price_show">100 - 1000</p>
                    <div id="price_range"></div>
                </div>				
                <div class="list-group">
					<h3>Categorias</h3>
                    <div style=" overflow-y: auto; overflow-x: hidden;">
					<?php
                    $connect = new PDO("mysql:host=localhost;dbname=u557675164_titulacion", "root", "");
                    $query = "SELECT DISTINCT(inve_catego) FROM inventario WHERE inve_estatus = 'Disponible' ORDER BY inve_id DESC";
                    $statement = $connect->prepare($query);
                    $statement->execute();
                    $result = $statement->fetchAll();
                    foreach($result as $row)
                    {
                    ?>
                    <div class="list-group-item checkbox">
                        <label><input type="checkbox" class="common_selector brand" value="<?php echo $row['inve_catego']; ?>"  > <?php echo $row['inve_catego']; ?></label>
                    </div>
                    <?php
                    }

                    ?>
                    </div>
                </div>

				<div class="list-group">
					<h3>Marca</h3>
                    <?php

                    $query = "SELECT DISTINCT(inve_marca) FROM inventario WHERE inve_estatus = 'Disponible' ORDER BY inve_id DESC";
                    $statement = $connect->prepare($query);
                    $statement->execute();
                    $result = $statement->fetchAll();
                    foreach($result as $row)
                    {
                    ?>
                    <div class="list-group-item checkbox">
                        <label><input type="checkbox" class="common_selector ram" value="<?php echo $row['inve_marca']; ?>" > <?php echo $row['inve_marca']; ?></label>
                    </div>
                    <?php    
                    }

                    ?>
                </div>
				
				<div class="list-group">
					<h3>Año</h3>
					<?php
                    $query = "SELECT DISTINCT(inve_year) FROM inventario WHERE inve_estatus = 'Disponible' ORDER BY inve_id DESC";
                    $statement = $connect->prepare($query);
                    $statement->execute();
                    $result = $statement->fetchAll();
                    foreach($result as $row)
                    {
                    ?>
                    <div class="list-group-item checkbox">
                        <label><input type="checkbox" class="common_selector storage" value="<?php echo $row['inve_year']; ?>"  > <?php echo $row['inve_year']; ?></label>
                    </div>
                    <?php
                    }
                    ?>	
                </div>
            </div>
            <div class="col-md-9">
                <div class="row filter_data">
                </div>
            </div>
        </div>
    </section>
    <footer>
        <?php
            include '../assets/components/footer.php';
        ?>
    </footer>
    <script src="../assets/js/index.js"></script>
    <script src="../assets/js/jquery-1.10.2.min.js"></script>
    <script src="../assets/js/jquery-ui.js"></script>
    <script src="../assets/js/filt.js"></script>
</body>
</html>
