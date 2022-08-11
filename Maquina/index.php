<!DOCTYPE html>
<html lang="es">
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="icon" type="image/png" sizes="32x32" href="https://meisamex.com.mx/assets/img/lg/icon.png">
      <meta name="theme-color" content="#bf1520"/>
      <meta name="description" content="Meisa ofrece un amplio cat��logo de productos de maquinaria, equipo y accesorios de cualquier ramo de la industria" />
      <title>Meisa - Contacto</title>
      <link rel="preload" href="https://meisamex.com.mx/assets/css/style.css" as="style" onload="this.rel='stylesheet'">
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
        <p class="card-text"> <i class="fas fa-thumbtack iconos"></i> Categoria: <?php echo $inve_nombre; ?></p>
        <?php } } else { ?>
            Datos no encontrados ... 
        <?php } ?>
    <section>
        <iframe title="Ubicacion de Meisa MX" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3765.560208665229!2d-99.56701140850782!3d19.30148236724018!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85cd8abd8654e1a1%3A0xc0dbdbabbf1a84bf!2sSegunda%205%20de%20Mayo%2020%2C%20Reforma%2C%20Delegaci%C3%B3n%20Santa%20Mar%C3%ADa%20Totoltepec%2C%2052100%20Toluca%20de%20Lerdo%2C%20M%C3%A9x.!5e0!3m2!1ses!2smx!4v1658210888350!5m2!1ses!2smx" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </section>
    <footer>
        <div class="footer__first">
            <div class="footer__hr">
                <img src="https://meisamex.com.mx/assets/img/art/clocnew.svg" loading="lazy" alt="Horarios de Meisa MX" title="Horarios de Meisa MX" width="28" height="100">
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
            <a href="https://www.facebook.com/meisaequip" title="Facebook" target="_blank">
            <img src="https://meisamex.com.mx/assets/img/social/lg_fb.svg" loading="lazy" alt="Facebook @meisaequip" title="Facebook @meisaequip" widht="100" height="100"  />
            </a>
            <a href="https://www.instagram.com/meisa_mex/" title="Instagram" target="_blank">
            <img src="https://meisamex.com.mx/assets/img/social/lg_ig.svg" loading="lazy" alt="Instagram @meisa_mex" title="Instagram @meisa_mex" widht="100" height="100"  />
            </a>
        </div>
        <div class="footer__social__line movil__footer">
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
    </footer>
    <script src="https://meisamex.com.mx/assets/js/index.js"></script>
</body>
</html>
