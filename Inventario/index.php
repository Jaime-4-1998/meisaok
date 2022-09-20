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
      <link rel="stylesheet" href="../index.css">
      <link rel="stylesheet" href="../assetss/css/jquery-ui.css">
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link rel="preload" href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500&display=swap" as="style" onload="this.rel='stylesheet'"> 
    </head>
<body>
    <section>
        <div class="meisa__productos">
            <div class="primero">
                <h2>jaime</h2>
                <div class="meisa__view__mobile">
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
                                                <span class="ui"></span>
                                                <span class="text"><?php echo $row['inve_catego']; ?></span>
                                            </label>
                                        
 

                                    </div>
                                    
                                <?php
                                    }
                                ?>
                </div>
                <div class="meisa__view__dektop">
                    <strong class="strong" id="menuy">menu</strong>
                    <nav class="navegacion">
                        <ul class="menu">
                        <div class="inicio">
                            <li class="title-menu" id="close">Cerrar</li>
                        </div>
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
                                        <div class="checkbox">
                                        
                                            
                                                <input type="checkbox" class="common_selector brand" id="<?php echo $row['inve_catego']; ?>" value="<?php echo $row['inve_catego']; ?>"  />
                                                <label for="<?php echo $row['inve_catego']; ?>">
                                                    <span class="ui"></span>
                                                    <span class="text"><?php echo $row['inve_catego']; ?></span>
                                                </label>
                                            
    

                                        </div>
                                        
                                    <?php
                                        }
                                    ?>
                            </div>
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="segundo">
                <h2>jaime</h2>
                <div class="products">
                    <div class="filter_data tercero__flex"></div>
                </div>
            </div>
        </div>
    </section>
    <script src="../index.js"></script>
    <script src="../assetss/js/jquery-1.10.2.min.js"></script>
    <script src="../assetss/js/jquery-ui.js"></script>
    <script src="../assetss/js/filt.js"></script>
</body>
</html>
