<!DOCTYPE html>
<html lang="es">
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="icon" type="image/png" sizes="32x32" href="https://meisamex.com.mx/assets/img/lg/meisa/sh.png">
      <meta name="theme-color" content="#bf1520"/>
      <?php
            try {
                $mbd = new PDO('mysql:host=localhost;dbname=u557675164_titulacion; charset=UTF8','root','');
            } catch (exception $e) {
                print "¡Error!: " . $e->getMessage() . "<br/>";
                die();
            }
      ?>
      <?php
            $maquina = $_GET['maquina'];
            $stmt = $mbd->prepare("SELECT * FROM inventario WHERE inve_nombre = '$maquina' ");
            $stmt->execute();
            if($stmt->rowCount() > 0)
            {
            while($row=$stmt->fetch(PDO::FETCH_ASSOC))
            {
            extract($row);
      ?>
      <meta name="description" content="<?php echo $inve_desc; ?>" />
      <title>Meisa - <?php echo str_replace("-", " ", $row['inve_nombre']); ?></title>
      <?php } } else { ?>
         Datos no encontrados ... 
      <?php } ?>
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />
      <link rel="stylesheet" href="http://localhost/meisa/assets/css/st.css">
      <link rel="preload" href="http://localhost/meisa/assets/css/style.css" as="style" onload="this.rel='stylesheet'">
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link rel="preload" href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500&display=swap" as="style" onload="this.rel='stylesheet'"> 
    </head>
<body>
   <header>
      <div class="head__black__miesa">
                <div class="header">
                    <div class="burgr-box" id="meisa">
                        <div class="meisa__logo desk">
                            <img src="https://meisamex.com.mx/assets/img/lg/meisa/22meisa879234789423.svg" alt="Meisa Mex" title="Meisa Mex">
                        </div>
                        <img src="https://meisamex.com.mx/assets/img/lg/meisa/icon-hamburger.svg" id="burgr-icon" alt="Meisa Mex" title="Meisa Mex" />
                        <div id="burgr-menu" class="nave">
                            <div class="meisa__logo mobi">
                                <img src="https://meisamex.com.mx/assets/img/lg/meisa/22meisa879234789423.svg" alt="Meisa Mex" title="Meisa Mex">
                            </div>
                            <nav>
                                <ul>
                                    <li> <a href="https://meisamex.com.mx/" class="link__text__menu">Inicio</a>

                                    </li>
                                    <li>
                                        <div class="drpdwn-box">
                                            <div class="drpdwn-btn" id="drpdwn-btn"> <a href="#" class="link__text__menu">Compra / Venta</a>  <span class="drpdwn-icon"><i class="fa"><img src="https://meisamex.com.mx/assets/img/lg/meisa/icon-arrow-light.svg" alt="Meisa Mex" title="Meisa Mex" /></i></span>

                                            </div>
                                            <div class="drpdwn">
                                                <ul class="drpdwn-list">
                                                    <li><a href="https://meisamex.com.mx/Compra/">Compra</a>
                                                    </li>
                                                    <li><a href="https://meisamex.com.mx/Venta/">Venta</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                    <li> <a href="https://meisamex.com.mx/PlantasdeLuz/" class="link__text__menu">Plantas de Luz</a>

                                    </li>
                                    <li> <a href="https://meisamex.com.mx/Maniobras/" class="link__text__menu">Maniobras</a>

                                    </li>
                                    <li> <a href="https://meisamex.com.mx/Contacto/" class="link__text__menu">Contacto</a>

                                    </li>
                                </ul>
                            </nav>
                            <div id="rght-nav">
                                <ul>
                                    <li><a href="https://meisamex.com.mx/en/" class="big-btn solid link__text__menus">English Version</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
      </div>
   </header>
   <section>
         <?php
            try {
                $mbd = new PDO('mysql:host=localhost;dbname=u557675164_titulacion; charset=UTF8','root','');
            } catch (exception $e) {
                print "¡Error!: " . $e->getMessage() . "<br/>";
                die();
            }
         ?>
         <?php
            $maquina = $_GET['maquina'];
            $stmt = $mbd->prepare("SELECT * FROM inventario WHERE inve_nombre = '$maquina' ");
            $stmt->execute();
            if($stmt->rowCount() > 0)
            {
            while($row=$stmt->fetch(PDO::FETCH_ASSOC))
            {
            extract($row);
         ?>
         <div class="productdetails__meisa">
            <h1><?php echo str_replace("-", " ", $row['inve_nombre']); ?></h1>
            <h2><?php echo $inve_desc; ?></h2>
         </div>
      <div class="props__prod">
         <div class="products__especific__miesa">
            <!-- Swiper JS -->
            <div style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff" class="swiper mySwiper2">
                              <div class="swiper-wrapper">
                              <div class="swiper-slide img__inveget">
                                 <img data-enlargable src="http://localhost/meisa/meisaback/adminmeisa/assets/<?php echo $inve_img; ?>" loading="lazy" alt="<?php echo $inve_nombre; ?>" title="<?php echo $inve_nombre; ?>" />
                              </div>
                              <div class="swiper-slide img__inveget">
                                 <img data-enlargable src="http://localhost/meisa/meisaback/adminmeisa/assets/<?php echo $inve_imgtrasera; ?>" loading="lazy" alt="<?php echo $inve_nombre; ?>" title="<?php echo $inve_nombre; ?>" />
                              </div>
                              <div class="swiper-slide img__inveget">
                                 <img data-enlargable src="http://localhost/meisa/meisaback/adminmeisa/assets/<?php echo $inve_imgldderecho; ?>" loading="lazy" alt="<?php echo $inve_nombre; ?>" title="<?php echo $inve_nombre; ?>" />
                              </div>
                              <div class="swiper-slide img__inveget">
                                 <img data-enlargable src="http://localhost/meisa/meisaback/adminmeisa/assets/<?php echo $inve_imgldizq; ?>" loading="lazy" alt="<?php echo $inve_nombre; ?>" title="<?php echo $inve_nombre; ?>" />
                              </div>
                              </div>
                              <div class="swiper-button-next"></div>
                              <div class="swiper-button-prev"></div>
            </div>
            <div thumbsSlider="" class="swiper mySwiper">
                              <div class="swiper-wrapper">
                              <div class="swiper-slide">
                                 <img src="http://localhost/meisa/meisaback/adminmeisa/assets/<?php echo $inve_img; ?>" loading="lazy" alt="<?php echo $inve_nombre; ?>" title="<?php echo $inve_nombre; ?>" />
                              </div>
                              <div class="swiper-slide">
                                 <img src="http://localhost/meisa/meisaback/adminmeisa/assets/<?php echo $inve_imgtrasera; ?>" loading="lazy" alt="<?php echo $inve_nombre; ?>" title="<?php echo $inve_nombre; ?>" />
                              </div>
                              <div class="swiper-slide">
                                 <img src="http://localhost/meisa/meisaback/adminmeisa/assets/<?php echo $inve_imgldderecho; ?>" loading="lazy" alt="<?php echo $inve_nombre; ?>" title="<?php echo $inve_nombre; ?>" />
                              </div>
                              <div class="swiper-slide">
                                 <img src="http://localhost/meisa/meisaback/adminmeisa/assets/<?php echo $inve_imgldizq; ?>" loading="lazy" alt="<?php echo $inve_nombre; ?>" title="<?php echo $inve_nombre; ?>" />
                              </div>
                              </div>
            </div>
            <!-- Swiper JS -->
         </div>
         <div class="details__prod">
            <div class="liena"></div>
            <span class="pord__disp"><?php echo $inve_estatus; ?></span>
            <div class="two__col__prod">
               <div class="two__col__prod__title">
                  <p><strong class="str__prod">Categoria</strong></p>
                  <p><strong class="str__prod">Marca</strong></p>
                  <p><strong class="str__prod">Modelo</strong></p>
                  <p><strong class="str__prod"># Serie</strong></p>
                  <p><strong class="str__prod">Año</strong></p>
                  <p><strong class="str__prod">Corriente</strong></p>
                  <?php 
                     $number = number_format($inve_precio,2,'.',',');
                  ?>
               </div>
               <div>
                  <p> <?php echo $inve_catego; ?></p>
                  <p> <?php echo $inve_modelo; ?></p>
                  <p> <?php echo $inve_serie; ?></p>
                  <p> <?php echo $inve_year; ?></p>
                  <p> <?php echo $inve_corriente; ?></p>
                  <p> <?php echo $inve_motor; ?></p>
               </div>
            </div>
            <div class="flex__priceinfo">
               
            <p class="prod__info">
               <strong class="str__prod prod__price">
                  <?php echo str_replace("-", " ", $row['inve_nombre']); ?>
               </strong>
            </p>
            <p class="prod__info"><strong class="str__prod prod__price">$<?php  echo $number; ?></strong></p>

            </div>
            <div class="liena"></div>
               <div class="form__pro">
                              <div>
                                 <?php 
                                       if($inve_youtube == '0'){
                                             echo ' ';
                                       }else{
                                             $output = '<div class="frame__youtube">'. $row['inve_youtube'] .'</div>'; echo $output;
                                       }
                                 ?>
                              </div>
               </div>
         </div>
         <?php } } else { ?>
            Datos no encontrados ... 
          <?php } ?>
      </div>
   </section>
   <footer>
            <div class="logo__foter">
              <img src="https://meisamex.com.mx/assets/img/lg/meisa/22meisa879234789423.svg" loading="lazy" alt="Meisa Mex" title="Meisa Mex">
            </div>
            <div class="head__footer">
                <h3>Contacto</h3>
                <div class="link__footer">
                    <div class="link__footer__lg">
                        <img src="https://meisamex.com.mx/assets/img/lg/foot/22loca78943879342897.svg" loading="lazy" alt="Ubicación de Meisa Mex" title="Ubicación de Meisa Mex">
                        <p>5 de mayo 20, Reforma, Delegación Santa Maria Totoltepec</p>
                    </div>
                    <div class="link__footer__lg">
                        <img src="https://meisamex.com.mx/assets/img/lg/foot/22corr98749848397902.svg" loading="lazy" alt="Contacto de Meisa Mex" title="Contacto de Meisa Mex">
                        <a href="mailto:contacto@meisa.com.mx">contacto@meisa.com.mx</a>
                    </div>
                    <div class="link__footer__lg">
                        <img src="https://meisamex.com.mx/assets/img/lg/foot/22wh9879898535454554.svg" loading="lazy" alt="Contacto de Meisa Mex" title="Contacto de Meisa Mex">
                        <a href="tel:7228283858">722 828 3858</a>
                    </div>
                    <div class="link__footer__lg">
                        <img src="https://meisamex.com.mx/assets/img/lg/foot/22wh9879898535454554.svg" loading="lazy" alt="Contacto de Meisa Mex" title="Contacto de Meisa Mex">
                        <a href="tel:5535688727">55 3568 8727</a>
                    </div>
                </div>
            </div>
            <div class="head__footer__one">
                <h3>Acera de Meisa</h3>
                <div class="link__footer">
                    <a href="https://meisamex.com.mx/">Inicio</a>
                    <a href="https://meisamex.com.mx/Compra/">Compra</a>
                    <a href="https://meisamex.com.mx/Venta/">Venta</a>
                    <a href="https://meisamex.com.mx/PlantasdeLuz/">Plantas de Luz</a>
                    <a href="https://meisamex.com.mx/Maniobras/">Maniobras</a>
                    <a href="https://meisamex.com.mx/Contacto/">Contacto</a>
                </div>
            </div>
            <div class="head__footer__two">
                <h3>Redes Socilaes</h3>
                <div class="link__social__footer">
                    <div class="link__social__red">
                        <a href="https://www.facebook.com/meisaequip">
                            <img src="https://meisamex.com.mx/assets/img/lg/foot/22fb9058305989054435.svg" loading="lazy" alt="Facebook Meisa Mex" title="Facebook Meisa Mex">
                        </a>
                        <a href="https://www.instagram.com/meisa_mex/">
                            <img src="https://meisamex.com.mx/assets/img/lg/foot/22ig8974923u432432444.svg" loading="lazy" alt="Instagram Meisa Mex" title="Instagram Meisa Mex">
                        </a>
                        <a href="https://www.linkedin.com/in/meisamex/">
                            <img src="https://meisamex.com.mx/assets/img/lg/foot/22link23498793244234232.svg" loading="lazy" alt="Linkedin Meisa Mex" title="Linkedin Meisa Mex">
                        </a>
                        <a href="https://twitter.com/meisamex">
                            <img src="https://meisamex.com.mx/assets/img/lg/foot/22tw423432344324.svg" loading="lazy" alt="Twitter Meisa Mex" title="Twitter Meisa Mex">
                        </a>
                        <a href="https://www.youtube.com/user/meisaequipos">
                            <img src="https://meisamex.com.mx/assets/img/lg/foot/22you2343478423789098234.svg" loading="lazy" alt="Youtube Meisa Mex" title="Youtube Meisa Mex">
                        </a>
                    </div>
                </div>
            </div>    
   </footer>
   <div class="copy__lamm">
      <p>Copyright 2022, Todos los derechos reservados, desarrollado por Lamm Soluciones Digitales</p>
   </div> 
   <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
   <script src="http://localhost/meisa/assets/js/swipinve.js"></script>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
   <script src="http://localhost/meisa/assets/js/invecarru.js"></script>
   <script src="http://localhost/meisa/assets/js/menu.js"></script>
</body>
</html>
