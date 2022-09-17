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
      <link rel="preload" href="../assetss/css/style.css" as="style" onload="this.rel='stylesheet'">
      <link rel="stylesheet" href="../assetss/css/jquery-ui.css">
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link rel="preload" href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500&display=swap" as="style" onload="this.rel='stylesheet'"> 
    </head>
<body>
    
    <section>
         <a href="https://api.whatsapp.com/send?phone=5215535688727&text=Hola!&nbsp;me&nbsp;pueden&nbsp;apoyar?" target="_blank">
         <img src="../assetss/img/art/whatsappsvg.svg" loading="lazy" alt="Contacto de Meisa MX" title="Contacto de Meisa MX" class="icon__wh" width="4" height="100" />
         </a>
    </section>
   <!--Filtro-->
   <section>
        <div class="title_inve">
            <h1>
              Inventario de equipo Meisa MEX
            </h1>
        </div>
        <div class="parr_inve">
            <p>
            Ofrecemos un amplio catálogo de productos de maquinaria, equipo y accesorios de cualquier ramo de la industria.
            Hemos apoyado a cientos de empresas y clientes, cubriendo sus necesidades urgentes de equipo y refacciones en
            excelentes condiciones de operación, a precios bajos y de entrega inmediata.
            </p>
        </div>
        <div class="container">
           <div class="filtrado">
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
				<ul class="list-group">
                    <li>Item One
                        <span class="badge">2</span>
                    </li>
                    <li>Item Two
                        <span class="badge">11</span>
                    </li>
                    <li>Item Three
                        <span class="badge">4</span>
                    </li>
                    <li>Item Four
                        <span class="badge">5</span>
                    </li>
                </ul>
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
           <div class="products">
                <div class="filter_data"></div>
           </div>
        </div>
    </section>
    <script src="../assetss/js/index.js"></script>
    <script src="../assetss/js/jquery-1.10.2.min.js"></script>
    <script src="../assetss/js/jquery-ui.js"></script>
    <script src="../assetss/js/filt.js"></script>
</body>
</html>
