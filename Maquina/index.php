<!DOCTYPE html>
<html lang="es">
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="icon" type="image/png" sizes="32x32" href="https://meisamex.com.mx/assets/img/lg/icon.png">
      <meta name="theme-color" content="#bf1520"/>
      <meta name="description" content="Meisa ofrece un amplio catalogo de productos de maquinaria, equipo y accesorios de cualquier ramo de la industria" />
      <title>Meisa - Contacto</title>
      <link rel="preload" href="http://localhost/meisa/assets/css/style.css" as="style" onload="this.rel='stylesheet'">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />
      <link rel="stylesheet" href="http://localhost/meisa/assets/css/inve.css">
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link rel="preload" href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500&display=swap" as="style" onload="this.rel='stylesheet'"> 
    </head>
<body>
    <header>
         <div class="header">
            <div class="first__column__head">
               <div class="img__head">
                  <img src="https://meisamex.com.mx/assets/img/lg/9800mei039087053.svg" loading="lazy" alt="Meisa MX" title="Meisa MX" width="50" height="100"/>
               </div>
            </div>
            <div class="second__column__head">
               <div class="content__header">
                  <a href="https://meisamex.com.mx/en/">English Version</a>
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
        <img src="https://meisamex.com.mx/assets/img/lg/9800mei039087053.svg" loading="lazy" alt="Meisa Mx" title="Meisa Mx" width="70" height="100" />
<div class="navbar__menu">
   <ul>
      <li>
         <a href="https://meisamex.com.mx/" class="navbar__link">Inicio</a>
      </li>
      <li>
         <a href="https://meisamex.com.mx/Inventario/" class="navbar__link">Inventario de Equipo</a>
      </li>
      <li>
         <a href="https://meisamex.com.mx/Maniobra/" class="navbar__link">Maniobra</a>
      </li>
      <li>
         <a href="https://meisamex.com.mx/RentadeEquipos/" class="navbar__link">Renta de Equipos</a>
      </li>
      <li>
         <a href="https://meisamex.com.mx/PlantasdeLuz/" class="navbar__link">Plantas de Luz</a>
      </li>
      <li>
         <a href="https://meisamex.com.mx/Contacto/" class="navbar__link">Contacto</a>
      </li>
   </ul>
</div>
<div class="nav__moblie">
   <i id="show__menu">
      <svg width="24" height="18" xmlns="http://www.w3.org/2000/svg">
         <path d="M24 16v2H0v-2h24zm0-8v2H0V8h24zm0-8v2H0V0h24z" fill="#000" fill-rule="evenodd"/>
      </svg>
   </i>
   <div class="moblie__nav__menu">
      <div class="moblie__nav__menu__links">
         <a href="https://meisamex.com.mx/" class="moblie__nav__menu__links__link">Inicio</a>
         <a href="https://meisamex.com.mx/Inventario/" class="moblie__nav__menu__links__link">Inventario de Equipo</a>
         <a href="https://meisamex.com.mx/Maniobra/" class="moblie__nav__menu__links__link">Maniobra</a>
         <a href="https://meisamex.com.mx/RentadeEquipos/" class="moblie__nav__menu__links__link">Renta de Equipos</a>
         <a href="https://meisamex.com.mx/PlantasdeLuz/" class="moblie__nav__menu__links__link">Plantas de Luz</a>
         <a href="https://meisamex.com.mx/Contacto/" class="moblie__nav__menu__links__link">Contacto</a>
      </div>
   </div>
</div>
    </nav>
    <section>
         <a href="https://api.whatsapp.com/send?phone=5215535688727&text=Hola!&nbsp;me&nbsp;pueden&nbsp;apoyar?" target="_blank">
         <img src="https://meisamex.com.mx/assets/img/art/whatsappsvg.svg" loading="lazy" alt="Contacto de Meisa MX" title="Contacto de Meisa MX" class="icon__wh" width="4" height="100" />
         </a>
    </section>
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
        <section>
         <div class="product__meisa">
            <h1><?php echo str_replace("-", " ", $row['inve_nombre']); ?></h1>
            <h2><?php echo $inve_desc; ?></h2>
         </div>
        </section>
        <section>
          <div class="product_des_miesa">
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
                           <div class="product_esp">
                              <h3>Especificaciones</h3>
                              <p>Categoria: <?php echo $inve_catego; ?></p>
                              <p>Marca: <?php echo $inve_marca; ?></p>
                              <p>Modelo: <?php echo $inve_modelo; ?></p>
                              <p># Serie: <?php echo $inve_serie; ?></p>
                              <p>Año: <?php echo $inve_year; ?></p>
                              <p>Corriente: <?php echo $inve_corriente; ?></p>
                              <p>Motor: <?php echo $inve_motor; ?></p>
                              <p>Capacidad: <?php echo $inve_capacidad; ?></p>
                              <?php 
                                 $number = number_format($inve_precio,2,'.',',');
                              ?>
                              <p>Precio: $<?php  echo $number; ?></p>
                           </div>
                     <!-- Swiper JS -->
          </div>
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
            <div>
               <p>formulario</p>
            </div>
         </div>
          <?php } } else { ?>
            Datos no encontrados ... 
          <?php } ?>
        </section>
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
    <!-- Initialize Swiper -->
    <script src="http://localhost/meisa/assets/js/swipinve.js"></script>
    <footer>
        <div class="li__footer">
         <div class="logo__foter">
            <img src="https://meisamex.com.mx/assets/img/lg/9800mei039087053.svg" alt="Meisa MEX" title="Meisa MEX" width="80" height="100" />
         </div>
         <p>
         <img src="https://meisamex.com.mx/assets/img/art/icon-location.svg" alt="">Segunda 5 de Mayo 20
            Reforma, Delegación Santa María Totoltepec
            52100 Toluca de Lerdo, Méx. 
         </p>
         <a href="tel:+527222117664"> (+52) 722-211-7694</a>
         <a href="tel:+5215535688727"> (+521) 55-3568-8727</a>
         <a href="mailto:contacto@meisamex.com.mx">contacto@meisamex.com.mx</a>
         <div class="footer__social">
            <a href="https://www.facebook.com/meisaequip" target="_blank" rel="noopener" aria-label="Facebook" title="Facebook">
             <img src="https://meisamex.com.mx/assets/img/social/lg_fb.svg" loading="lazy" alt="Facebook @meisaequip" title="Facebook @meisaequip" widht="100" height="100"  />
            </a>
            <a href="https://www.instagram.com/meisa_mex/" title="Instagram" target="_blank">
               <img src="https://meisamex.com.mx/assets/img/social/lg_ig.svg" loading="lazy" alt="Instagram @meisa_mex" title="Instagram @meisa_mex" widht="100" height="100"  />
            </a>
            <a href="https://twitter.com/meisamex" title="Twitter" target="_blank">
               <img src="https://meisamex.com.mx/assets/img/social/lg_tw.svg" loading="lazy"  alt="Twitter @meisa_mex" title="Twitter @meisa_mex" widht="100" height="100"  />
            </a>
            <a href="https://www.youtube.com/user/meisaequipos" title="Youtube" target="_blank">
               <img src="https://meisamex.com.mx/assets/img/social/lg_you.svg" loading="lazy"  alt="Youtube @meisa_mex" title="Youtube @meisa_mex" widht="100" height="100"  />
            </a>
            <a href="https://www.linkedin.com/in/meisamex/" title="Linkedin" target="_blank">
               <img src="https://meisamex.com.mx/assets/img/social/lg_lin.svg" loading="lazy"  alt="Linkedin @meisa_mex" title="Linkedin @meisa_mex" widht="100" height="100"  />
            </a>
       
         </div>
      </div>
      <div class="li__footer ">
         <iframe title="Ubicación de Meisa MX" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3765.560208665229!2d-99.56701140850782!3d19.30148236724018!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85cd8abd8654e1a1%3A0xc0dbdbabbf1a84bf!2sSegunda%205%20de%20Mayo%2020%2C%20Reforma%2C%20Delegaci%C3%B3n%20Santa%20Mar%C3%ADa%20Totoltepec%2C%2052100%20Toluca%20de%20Lerdo%2C%20M%C3%A9x.!5e0!3m2!1ses!2smx!4v1658210888350!5m2!1ses!2smx" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
      <div class="li__footer padd__esp">
         <a href="https://meisamex.com.mx/">Inicio</a>
         <a href="https://meisamex.com.mx/Inventario/">Inventario de Equipo</a>
         <a href="https://meisamex.com.mx/Maniobra/">Maniobra</a>
         <a href="https://meisamex.com.mx/RentadeEquipos/">Renta de Equipos</a>
         <a href="https://meisamex.com.mx/PlantasdeLuz/">Plantas de Luz</a>
         <a href="https://meisamex.com.mx/Contacto/">Contacto</a>
      </div>    
    </footer>
    <script src="https://meisamex.com.mx/assets/js/index.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="http://localhost/meisa/assets/js/invecarru.js"></script>
</body>
</html>
