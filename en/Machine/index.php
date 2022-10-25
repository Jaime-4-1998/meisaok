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
            $seguridad = $_GET['seguridad'];
            $stmt = $mbd->prepare("SELECT * FROM inventario WHERE inve_nombreingles = '$maquina'  AND inve_seguridad = '$seguridad'");
            $stmt->execute();
            if($stmt->rowCount() > 0)
            {
            while($row=$stmt->fetch(PDO::FETCH_ASSOC))
            {
            extract($row);
      ?>
      <meta name="description" content="<?php echo $inve_desc; ?>" />
      <title>Meisa - <?php echo str_replace("-", " ", $row['inve_nombreingles']); ?></title>
      <?php } } else { ?>
         Datos no encontrados ... 
      <?php } ?>
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />
      <link rel="stylesheet" href="http://localhost/meisa/assets/css/st.css">
      <link rel="preload" href="http://localhost/meisa/assets/css/style.css" as="style" onload="this.rel='stylesheet'">
      <link rel="preload" href="http://localhost/meisa/assets/css/btn.css" as="style" onload="this.rel='stylesheet'">
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link rel="preload" href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500&display=swap" as="style" onload="this.rel='stylesheet'"> 
      <script type="text/javascript">(function () { var ldk = document.createElement('script'); ldk.type = 'text/javascript'; ldk.async = true; ldk.src = 'https://s.cliengo.com/weboptimizer/633d9a29f75c18002a3c8035/633d9a2bf75c18002a3c8039.js?platform=dashboard'; var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ldk, s); })();</script>
    </head>
<body>
    <header>
        <div class="head__black__miesa">
            <div class="header head__contc">
        <div class="burgr-box" id="meisa">
                    <div class="meisa__logo desk">
                        <a href="https://meisamex.com.mx/en/" title="Meisa Mex">
                            <img src="https://meisamex.com.mx/assets/img/lg/meisa/22meisa879234789423.svg" alt="Meisa Mex" title="Meisa Mex">
                        </a>
                    </div>
                    <img src="https://meisamex.com.mx/assets/img/lg/meisa/icon-hamburger.svg" id="burgr-icon" alt="Meisa Mex" title="Meisa Mex" />
                    
                    <div id="burgr-menu" class="nave">
                        <div class="meisa__logo mobi">
                            <a href="https://meisamex.com.mx/en/" title="Meisa Mex">
                                <img src="https://meisamex.com.mx/assets/img/lg/meisa/22meisa879234789423.svg" alt="Meisa Mex" title="Meisa Mex">
                            </a>
                        </div>
                    <nav>
                        <ul>
                            <li>
                                <a href="https://meisamex.com.mx/en/" class="link__text__menu">Home</a>
                            </li>
                            
                            <li>
                                <div class="drpdwn-box">
                                <div class="drpdwn-btn" id="drpdwn-btn">
                                    <a href="#" class="link__text__menu">Purchase / Sales</a> <span class="drpdwn-icon"><i class="fa"><img src="https://meisamex.com.mx/assets/img/lg/meisa/icon-arrow-light.svg" alt="Meisa Mex" title="Meisa Mex" /></i></span>
                                </div>
                                <div class="drpdwn">
                                    <ul class="drpdwn-list">
                                    <li><a href="https://meisamex.com.mx/en/Purchase/">Purchase</a></li>
                                    <li><a href="https://meisamex.com.mx/en/Sales/">Sales</a></li>
                                    </ul>
                                </div>
                                </div>
                            </li>
                            <li>
                                <a href="https://meisamex.com.mx/en/Lightplants/" class="link__text__menu">Light plants</a>
                            </li>
                            <li>
                            <a href="https://meisamex.com.mx/en/Maneuvers/" class="link__text__menu">Maneuvers</a>
                            </li>
                            <li>
                                <a href="https://meisamex.com.mx/en/Contac/" class="link__text__menu">Contac</a>
                            </li>
                        </ul>
                    </nav>
                    <div id="rght-nav">
                        <ul>
                        <li><a href="https://meisamex.com.mx/" class="big-btn solid link__text__menus">Spanish Version</a></li>
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
            $seguridad = $_GET['seguridad'];
            $stmt = $mbd->prepare("SELECT * FROM inventario WHERE inve_nombreingles = '$maquina'  AND inve_seguridad = '$seguridad'");
            $stmt->execute();
            if($stmt->rowCount() > 0)
            {
            while($row=$stmt->fetch(PDO::FETCH_ASSOC))
            {
            extract($row);
         ?>
         <div class="productdetails__meisa">
            <h1><?php echo str_replace("-", " ", $row['inve_nombreingles']); ?></h1>
            <?php
                if($inve_desc === 'N/A'){
                    echo '<br/></br>';
                }else{
                    echo '<h2>'.$inve_desc.'</h2>';
                }
            ?>
         </div>
      <div class="props__prod">
         <div class="products__especific__miesa">
            <!-- Swiper JS -->
            <div style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff" class="swiper mySwiper2">
                              <div class="swiper-wrapper">
                              <div class="swiper-slide img__inveget">
                                 <img data-enlargable src="http://localhost/meisa/meisaback/adminmeisa/assets/<?php echo $inve_img; ?>" loading="lazy" alt="<?php echo $inve_nombreingles; ?>" title="<?php echo $inve_nombreingles; ?>" />
                              </div>
                              <div class="swiper-slide img__inveget">
                                 <img data-enlargable src="http://localhost/meisa/meisaback/adminmeisa/assets/<?php echo $inve_imgtrasera; ?>" loading="lazy" alt="<?php echo $inve_nombreingles; ?>" title="<?php echo $inve_nombreingles; ?>" />
                              </div>
                              <div class="swiper-slide img__inveget">
                                 <img data-enlargable src="http://localhost/meisa/meisaback/adminmeisa/assets/<?php echo $inve_imgldderecho; ?>" loading="lazy" alt="<?php echo $inve_nombreingles; ?>" title="<?php echo $inve_nombreingles; ?>" />
                              </div>
                              <div class="swiper-slide img__inveget">
                                 <img data-enlargable src="http://localhost/meisa/meisaback/adminmeisa/assets/<?php echo $inve_imgldizq; ?>" loading="lazy" alt="<?php echo $inve_nombreingles; ?>" title="<?php echo $inve_nombreingles; ?>" />
                              </div>
                              </div>
                              <div class="swiper-button-next"></div>
                              <div class="swiper-button-prev"></div>
            </div>
            <div thumbsSlider="" class="swiper mySwiper">
                              <div class="swiper-wrapper">
                              <div class="swiper-slide">
                                 <img src="http://localhost/meisa/meisaback/adminmeisa/assets/<?php echo $inve_img; ?>" loading="lazy" alt="<?php echo $inve_nombreingles; ?>" title="<?php echo $inve_nombreingles; ?>" />
                              </div>
                              <div class="swiper-slide">
                                 <img src="http://localhost/meisa/meisaback/adminmeisa/assets/<?php echo $inve_imgtrasera; ?>" loading="lazy" alt="<?php echo $inve_nombreingles; ?>" title="<?php echo $inve_nombreingles; ?>" />
                              </div>
                              <div class="swiper-slide">
                                 <img src="http://localhost/meisa/meisaback/adminmeisa/assets/<?php echo $inve_imgldderecho; ?>" loading="lazy" alt="<?php echo $inve_nombreingles; ?>" title="<?php echo $inve_nombreingles; ?>" />
                              </div>
                              <div class="swiper-slide">
                                 <img src="http://localhost/meisa/meisaback/adminmeisa/assets/<?php echo $inve_imgldizq; ?>" loading="lazy" alt="<?php echo $inve_nombreingles; ?>" title="<?php echo $inve_nombreingles; ?>" />
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
                    <?php 
                        if($inve_category === 'N/A'){
                            echo '';
                        }else{
                            echo '<p><strong class="str__prod">Category</strong></p>';
                        }
                        if($inve_marca === 'N/A'){
                            echo '';
                        }else{
                            echo '<p><strong class="str__prod">Brand</strong></p>';
                        }
                        if($inve_modelo === 'N/A'){
                            echo '';
                        }else{
                            echo '<p><strong class="str__prod">Model</strong></p>';
                        }
                        if($inve_serie === 'N/A'){
                            echo '';
                        }else{
                            echo '<p><strong class="str__prod"># Serie</strong></p>';
                        }
                        if($inve_year === 'N/A'){
                            echo '';
                        }else{
                            echo '<p><strong class="str__prod">Year</strong></p>';
                        }
                        if($inve_corriente === 'N/A'){
                            echo '';
                        }else{
                            echo '<p><strong class="str__prod">Stream</strong></p>';
                        }
                        if($inve_motor === 'N/A'){
                            echo '';
                        }else{
                            echo '<p><strong class="str__prod">Engine</strong></p>';
                        }
                        if($inve_capacidad === 'N/A'){
                            echo '';
                        }else{
                            echo '<p><strong class="str__prod">Capacity</strong></p>';
                        }
                    ?>
               </div>
               <div>
                    <?php 
                        if($inve_category === 'N/A'){
                            echo '';
                        }else{
                            echo '<p>'.$inve_category.'</p>';
                        }
                        if($inve_marca === 'N/A'){
                            echo '';
                        }else{
                            echo '<p>'.$inve_marca.'</p>';
                        }
                        if($inve_modelo === 'N/A'){
                            echo '';
                        }else{
                            echo '<p>'.$inve_modelo.'</p>';
                        }
                        if($inve_serie === 'N/A'){
                            echo '';
                        }else{
                            echo '<p>'.$inve_serie.'</p>';
                        }
                        if($inve_year === 'N/A'){
                            echo '';
                        }else{
                            echo '<p>'.$inve_year.'</p>';
                        }
                        if($inve_corriente === 'N/A'){
                            echo '';
                        }else{
                            echo '<p>'.$inve_corriente.'</p>';
                        }
                        if($inve_motor === 'N/A'){
                            echo '';
                        }else{
                            echo '<p>'.$inve_motor.'</p>';
                        }
                        if($inve_capacidad === 'N/A'){
                            echo '';
                        }else{
                            echo '<p>'.$inve_capacidad.'</p>';
                        }
                    ?>
               </div>
            </div>
            <div class="flex__priceinfo">
               
            <p class="prod__info">
               <strong class="str__prod prod__price">
                  <?php echo str_replace("-", " ", $row['inve_nombreingles']); ?>
               </strong>
            </p>
            <p class="prod__info">
                <?php 
                    $number = number_format($inve_precio,2,'.',',');
                    if($inve_precio === '0000'){
                        echo '';
                    }else{
                        echo '<strong class="str__prod prod__price">'.$number.' MXN</strong>';
                    }
                ?>
            </p>
            </div>
            <div class="liena"></div>
               <div class="form__pro">
                              <div>
                                <?php 
                                 
                                    if($inve_youtube == 'N/A'){
                                        $nam = str_replace("-", " ", $row["inve_nombreingles"]);
                                        $formu = '<form class="form__data" id="forme">
                                        <label class="form__label">Nombre Completo</label>
                                        
                                        <input class="form__control" type="text" disabled name="" value="Informes sobre: '.$nam.'" id="name" placeholder="Nombre Completo">
                                        
                                        <label class="form__label">Nombre Completo</label>
                                        <input class="form__control" type="text" name="" id="names" placeholder="Nombre Completo">
                                        
                    
                                        <label class="form__label">Correo</label>
                                        <input class="form__control" type="email" name="" id="mail" placeholder="corre@example.com">
                                        
                                        <label class="form__label">Telefono</label>
                                        <input class="form__control" type="text" name="" id="tel" placeholder="Telefono de contacto">
                                        
                                        <label class="form__label">Comentarios</label>
                                        <textarea class="form__control" name="" id="tema" placeholder="Comentarios" rows="5" cols="12" ></textarea>
                                        <small class="form__error ok fail" id="respuesta"></small>
                                        <button id="submit" type="submit" class="buton__form">Enviar</button>
                                    </form>';
                                    echo $formu;
                                    }else{
                                            $you=$row['inve_youtube'];
                                            $str = str_replace("watch?v=", "embed/", $row['inve_youtube']);
                                            $stre = str_replace("?v=", "/", $str);
                                            $ctr = '?controls=0'; 
                                            $output = '<div class="frame__youtube">
                                                        <iframe src="'.$str.''.$ctr.'" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>        
                                                    </div>'; 
                                            
                                            echo $output;
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
   <section>
    <div class="apartado__rel">
        <div class="prod__rela">
            <h2>Relations Section</h2>
        </div>
        <div class="form__rel">
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
                        $seguridad = $_GET['seguridad'];
                        $stmt = $mbd->prepare("SELECT * FROM inventario WHERE inve_nombreingles = '$maquina' AND inve_seguridad = '$seguridad' ");
                        $stmt->execute();
                        if($stmt->rowCount() > 0)
                        {
                        while($row=$stmt->fetch(PDO::FETCH_ASSOC))
                        {
                        extract($row);
                ?>
                <?php 
                                 
                                 if($inve_youtube == 'N/A' ){
                                 echo "";
                                  }else{
                                     $namr = str_replace("-", " ", $row["inve_nombre"]);
                                     $formur = '<form class="form__data" id="forme">
                                     <label class="form__label">Nombre Completo</label>
                                     
                                     <input class="form__control" type="text" disabled name="" value="Informes sobre: '.$namr.'" id="name" placeholder="Nombre Completo">
                                     
                                     <label class="form__label">Nombre Completo</label>
                                     <input class="form__control" type="text" name="" id="names" placeholder="Nombre Completo">
                                     
                 
                                     <label class="form__label">Correo</label>
                                     <input class="form__control" type="email" name="" id="mail" placeholder="corre@example.com">
                                     
                                     <label class="form__label">Telefono</label>
                                     <input class="form__control" type="text" name="" id="tel" placeholder="Telefono de contacto">
                                     
                                     <label class="form__label">Comentarios</label>
                                     <textarea class="form__control" name="" id="tema" placeholder="Comentarios" rows="5" cols="12" ></textarea>
                                     <small class="form__error ok fail" id="respuesta"></small>
                                     <button id="submit" type="submit" class="buton__form">Enviar</button>
                                 </form>';
                                     echo $formur;
                                  }
                             ?>
                <?php } } else { ?>
                    Datos no encontrados ... 
                <?php } ?>
                
        </div>
    </div>
   </section>         
    <footer>
        <div class="logo__foter">
              <img src="https://meisamex.com.mx/assets/img/lg/meisa/22meisa879234789423.svg" loading="lazy" alt="Meisa Mex" title="Meisa Mex">
        </div>
        <div class="head__footer">
                <h3>Contact</h3>
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
                <h3>About of Meisa</h3>
                <div class="link__footer">
                    <a href="https://meisamex.com.mx/en/">Home</a>
                    <a href="https://meisamex.com.mx/en/Purchase/">Purchase</a>
                    <a href="https://meisamex.com.mx/en/Sales/">Sales</a>
                    <a href="https://meisamex.com.mx/en/Lightplants/">Light plants</a>
                    <a href="https://meisamex.com.mx/en/Maneuvers/">Maneuvers</a>
                    <a href="https://meisamex.com.mx/en/Contac/">Contact</a>
                </div>
        </div>
        <div class="head__footer__two">
                <h3>Follow us</h3>
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
   <span class="btn-scrolltop" id="btn_scrolltop">
    <img src="https://meisamex.com.mx/assets/img/lg/meisa/icon-arrow-light.svg" loading="lazy" alt="Button UP Meisa" title="Button UP Meisa" width="100" height="100" class="btn__up">
    </span>
   <div class="copy__lamm">
      <p>Copyright 2022, Todos los derechos reservados, desarrollado por Lamm Soluciones Digitales</p>
   </div> 
   <script src="http://localhost/meisa/assets/js/btn.js"></script>
   <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
   <script src="http://localhost/meisa/assets/js/swipinve.js"></script>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
   <script src="http://localhost/meisa/assets/js/invecarru.js"></script>
   <script src="http://localhost/meisa/assets/js/menu.js"></script>
   <script src="http://localhost/meisa/assets/js/ventform.js"></script>
</body>
</html>
