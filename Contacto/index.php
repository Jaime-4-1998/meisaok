<!DOCTYPE html>
<html lang="es">
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="icon" type="image/png" sizes="32x32" href="https://meisamex.com.mx/assets/img/lg/meisa/sh.png">
      <meta name="theme-color" content="#bf1520"/>
      <meta name="description" content="Meisa ofrece un amplio catálogo de productos de maquinaria, equipo y accesorios de cualquier ramo de la industria" />
      <title>Meisa - Contacto</title>
      <link rel="preload" href="../assets/css/style.css" as="style" onload="this.rel='stylesheet'">
      <link rel="preload" href="../assets/css/btn.css" as="style" onload="this.rel='stylesheet'">
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link rel="preload" href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500&display=swap" as="style" onload="this.rel='stylesheet'"> 
    </head>
<body>
    <header>
        <div class="head__black__miesa">
            <?php
                include '../assets/components/nav.php';
            ?>
        </div>
    </header>
    <section>
        <div class="meisa_contact">
            <div class="meisa__data">
                <h1>
                    CONTÁCTANOS
                    <span class="maine__line"></span>
                </h1>
                <p>
                    Queremos saber como ayudarte en implementar la mejor opción para tu negocio.
                </p>
                <p>
                    Déjanos tus datos para brindarte una mejor atención.
                </p>
                <h2>
                    SOLICITA TU COTIZACIÓN
                    <span class="maine__line"></span>
                </h2>
                <form class="form__data" id="form">
                    <label class="form__label">Nombre Completo</label>
                    <input class="form__control" type="text" name="" id="name" placeholder="Nombre Completo:">
                    
                    <label class="form__label">Compañia</label>
                    <input class="form__control" type="text" name="" id="comp" placeholder="Compañia:">
                    
                    <label class="form__label">Ciudad</label>
                    <input class="form__control" type="text" name="" id="ciu" placeholder="Ciudad:">
                    
                    <label class="form__label">País</label>
                    <input class="form__control" type="text" name="" id="pais" placeholder="País:">
                    
                    <label class="form__label">Correo</label>
                    <input class="form__control" type="email" name="" id="mail" placeholder="corre@example.com:">
                    
                    <label class="form__label">Telefono</label>
                    <input class="form__control" type="text" name="" id="tel" placeholder="Telefono de contacto:">
                    
                    <label class="form__label">Mesaje</label>
                    <textarea class="form__control" name="" id="tema" placeholder="Tema a tratar:" rows="5" cols="12" ></textarea>
                    <small class="form__error ok fail" id="respuesta"></small>
                    <button id="submit" type="submit" class="buton__form">Enviar</button>
                </form>
            </div>
            <div class="meisa__ubi">
                <div class="meisa__img_cont">
                    <img src="../assets/img/bg/22sen89743534543.svg" loading="lazy" alt="Contacto de Meisa Mex" title="Contacto de Meisa Mex" width="100" height="100" /> 
                </div>
                <iframe title="Ubicación de Meisa MX" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3765.560208665229!2d-99.56701140850782!3d19.30148236724018!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85cd8abd8654e1a1%3A0xc0dbdbabbf1a84bf!2sSegunda%205%20de%20Mayo%2020%2C%20Reforma%2C%20Delegaci%C3%B3n%20Santa%20Mar%C3%ADa%20Totoltepec%2C%2052100%20Toluca%20de%20Lerdo%2C%20M%C3%A9x.!5e0!3m2!1ses!2smx!4v1658210888350!5m2!1ses!2smx" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                <div class="meisa__tels">
                    <h3>OFICINA</h3>
                    <a href="tel:7221970548"><img src="../assets/img/lg/meisa/22tel900.svg" loading="lazy" alt="Contacto de Meisa Mex" title="Contacto de Meisa Mex"> 722 197 0548</a>
                    <a href="tel:7222117694"><img src="../assets/img/lg/meisa/22tel900.svg" loading="lazy" alt="Contacto de Meisa Mex" title="Contacto de Meisa Mex"> 722 211 7694</a>
                    <a href="tel:7222165752"><img src="../assets/img/lg/meisa/22tel900.svg" loading="lazy" alt="Contacto de Meisa Mex" title="Contacto de Meisa Mex"> 722 216 5752</a>
                    <a href="tel:7222112931"><img src="../assets/img/lg/meisa/22tel900.svg" loading="lazy" alt="Contacto de Meisa Mex" title="Contacto de Meisa Mex"> 722 211 2931</a>

                    <a href="https://api.whatsapp.com/send?phone=7228283858&text=Hola!&nbsp;me&nbsp;pueden&nbsp;apoyar?" target="_blank"><img src="../assets/img/lg/meisa/22wh800.svg" loading="lazy" alt="Contacto de Meisa Mex" title="Contacto de Meisa Mex"> 722 828 3858</a>
                    <a href="https://api.whatsapp.com/send?phone=555535688727&text=Hola!&nbsp;me&nbsp;pueden&nbsp;apoyar?" target="_blank"><img src="../assets/img/lg/meisa/22wh800.svg" loading="lazy" alt="Contacto de Meisa Mex" title="Contacto de Meisa Mex"> 55 55 35 68 87 27</a>
                    <a href="mailto:contacto@meisamex.com.mx"><img src="../assets/img/lg/meisa/22corr700.svg" loading="lazy" alt="Contacto de Meisa Mex" title="Contacto de Meisa Mex"> contacto@meisamex.com.mx</a>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <?php
            include '../assets/components/footer.php';
        ?>
    </footer>
    <?php
        include '../assets/components/btn.php';
    ?>
    <div class="copy__lamm">
        <p>Copyright 2022, Todos los derechos reservados, desarrollado por Lamm Soluciones Digitales</p>
    </div>
    <script src="../assets/js/menu.js"></script>
    <script src="../assets/js/wh.js"></script>
    <script src="../assets/js/btn.js"></script>
</body>
</html>
