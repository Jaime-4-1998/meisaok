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
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500&display=swap" rel="stylesheet"> 
</head>
<body>
    <header>
        <div class="header">
            <div class="first__column__head">
                <div class="img__head">
                 <img src="assets/img/lg/9800mei039087053.svg" loading="lazy" alt="Meisa MX" title="Meisa MX" width="50" height="100"/>
                </div>
             </div>
             <div class="second__column__head">
                 <div class="content__header">
                    <span>English Version</span>
                    <a href="tel:8006347269">800-634-7269</a>
                    <input type="text" name="" id="" class="input__content">
                 </div>
             </div>
        </div>
        <hr class="color__red"></hr>
        <hr class="color__white"></hr>
        <hr class="color__black"></hr>
    </header>
    <nav>
        <img src="assets/img/lg/9800mei039087053.svg" loading="lazy" alt="Meisa Mx" title="Meisa Mx" width="70" height="100" />
        <div class="navbar__menu">
           <ul>
                <li>
                    <a href="https://frontmentor-jimmy.vercel.app/" class="navbar__link">Inicio</a>
                </li>
                <li>
                    <a href="https://frontmentor-jimmy.vercel.app/" class="navbar__link">Inventario de Equipo</a>
                </li>
                <li>
                    <a href="https://frontmentor-jimmy.vercel.app/" class="navbar__link">Maniobra</a>
                </li>
                <li>
                    <a href="https://frontmentor-jimmy.vercel.app/" class="navbar__link">Renta de Equipos</a>
                </li>
                <li>
                    <a href="https://frontmentor-jimmy.vercel.app/" class="navbar__link">Plantas de Luz</a>
                </li>
                <li>
                    <a href="https://frontmentor-jimmy.vercel.app/" class="navbar__link">Contacto</a>
                </li>
           </ul>
        </div>
        <div class="nav__moblie">
          <i id="show__menu">
            <svg width="24" height="18" xmlns="http://www.w3.org/2000/svg"><path d="M24 16v2H0v-2h24zm0-8v2H0V8h24zm0-8v2H0V0h24z" fill="#000" fill-rule="evenodd"/></svg>
          </i>
          <div class="moblie__nav__menu">
            <div class="moblie__nav__menu__links">
                <a href="https://frontmentor-jimmy.vercel.app/" class="moblie__nav__menu__links__link">Inicio</a>
                <a href="https://frontmentor-jimmy.vercel.app/" class="moblie__nav__menu__links__link">Inventario de Equipo</a>
                <a href="https://frontmentor-jimmy.vercel.app/" class="moblie__nav__menu__links__link">Maniobra</a>
                <a href="https://frontmentor-jimmy.vercel.app/" class="moblie__nav__menu__links__link">Renta de Equipos</a>
                <a href="https://frontmentor-jimmy.vercel.app/" class="moblie__nav__menu__links__link">Plantas de Luz</a>
                <a href="https://frontmentor-jimmy.vercel.app/" class="moblie__nav__menu__links__link">Contacto</a>
            </div>
          </div>
        </div>
      </nav>
      <section>
        <a href="https://api.whatsapp.com/send?phone=5215535688727&text=Hola!&nbsp;me&nbsp;pueden&nbsp;apoyar?" target="_blank">
            <img src="assets/img/art/whatsappsvg.svg" loading="lazy" alt="Contacto de Meisa MX" title="Contacto de Meisa MX" class="icon__wh" width="4" height="100" />
        </a>
      </section>
      <!--Content-->
                                        <?php
                                        include 'meisaback/adminmeisa/assets/components/backend/conexion.php';
                                        $sql = "SELECT id_home,title_one,desc_one
                                        FROM home ORDER BY id_home ASC"; 
                                        $query = $mbd -> prepare($sql); 
                                        $query -> execute(); 
                                        $results = $query -> fetchAll(PDO::FETCH_OBJ); 
                                            if($query -> rowCount() > 0){ 
                                                foreach($results as $result) { 
                                                    $data = $result -> id_home."||".
                                                    $result -> title_one."||".
                                                    $result -> desc_one; 
                                                ?>
                                                <?php echo $result -> title_one; ?>
                                                <?php echo $result -> desc_one; ?>
                                            <?php
                                                    }
                                                }
                                            ?>
      <!--End-->
      <section>
        <iframe title="Ubicación de Meisa MX" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3765.560208665229!2d-99.56701140850782!3d19.30148236724018!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85cd8abd8654e1a1%3A0xc0dbdbabbf1a84bf!2sSegunda%205%20de%20Mayo%2020%2C%20Reforma%2C%20Delegaci%C3%B3n%20Santa%20Mar%C3%ADa%20Totoltepec%2C%2052100%20Toluca%20de%20Lerdo%2C%20M%C3%A9x.!5e0!3m2!1ses!2smx!4v1658210888350!5m2!1ses!2smx" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </section>
    <footer>
        <div class="footer__first">
            <div class="footer__hr">
                <img src="assets/img/art/cloc.svg" loading="lazy" alt="Horarios de Meisa MX" title="Horarios de Meisa MX" width="28" height="100">
                <p>Lunes a viernes de 9:00am - 18:00pm</p>
            </div>
            <p>Sábados de 9:00am - 14:00pm</p>
        </div>
        <div class="footer__second">
            <a href="tel:+527222117664">(+52) 722-211-7694</a>
            <a href="tel:+5215535688727">(+521) 55-3568-8727</a>
            <a href="mailto:contacto@meisamex.com.mx">contacto@meisamex.com.mx</a>
        </div>
        <div class="footer__four">
          <div class="footer__social__line movil__footer">
            <a href="">
                <img src="assets/img/social/facebook.svg" loading="lazy" alt="@meisaequip" title="@meisaequip" /> @meisaequip
              </a>
              <a href="">
                <img src="assets/img/social/facebook.svg" loading="lazy" alt="@meisa_mex" title="@meisa_mex" /> @meisa_mex
              </a>
          </div>
          <div class="footer__social__line">
            <a href="">
                <img src="assets/img/social/facebook.svg" loading="lazy" class="social__media__img" alt="@meisa_mex" title="@meisa_mex" /> @meisamex
              </a>
              <a href="">
                <img src="assets/img/social/facebook.svg" loading="lazy" class="social__media__img" alt="@meisa_mex" title="@meisa_mex" /> @Meisa Mex</a>
              <a href="">
                <img src="assets/img/social/facebook.svg" loading="lazy" class="social__media__img" alt="@meisa_mex" title="@meisa_mex" /> @MEISA Mex
              </a>
          </div>
        </div>
    </footer>
    <script src="assets/js/index.js"></script>
</body>
</html>