<!DOCTYPE html>
<html lang="es">
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="icon" type="image/png" sizes="32x32" href="../assets/img/lg/icon.png">
      <meta name="theme-color" content="#bf1520"/>
      <meta name="description" content="Meisa ofrece un amplio catálogo de productos de maquinaria, equipo y accesorios de cualquier ramo de la industria" />
      <title>Meisa - Contacto</title>
      <link rel="preload" href="../assets/css/style.css" as="style" onload="this.rel='stylesheet'">
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
                  <span>English Version</span>
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
        <?php
            include '../assets/components/nav.php';
        ?>
    </nav>
    <section>
         <a href="https://api.whatsapp.com/send?phone=5215535688727&text=Hola!&nbsp;me&nbsp;pueden&nbsp;apoyar?" target="_blank">
         <img src="../assets/img/art/whatsappsvg.svg" loading="lazy" alt="Contacto de Meisa MX" title="Contacto de Meisa MX" class="icon__wh" width="4" height="100" />
         </a>
    </section>
    <section>
        <h1>
            <div class="text__cont">
                Contacto
            </div>
        </h1>
    </section>
    <section>
        <form class="form__data" id="form">
            <label class="form__label">Nombre Completo</label>
            <input class="form__control" type="text" name="" id="name" placeholder="Nombre Completo">
            
            <label class="form__label">Compañia</label>
            <input class="form__control" type="text" name="" id="comp" placeholder="Compañia">
            
            <label class="form__label">Ciudad</label>
            <input class="form__control" type="text" name="" id="ciu" placeholder="Ciudad">
            
            <label class="form__label">País</label>
            <input class="form__control" type="text" name="" id="pais" placeholder="País">
            
            <label class="form__label">Correo</label>
            <input class="form__control" type="email" name="" id="mail" placeholder="corre@example.com">
            
            <label class="form__label">Telefono</label>
            <input class="form__control" type="text" name="" id="tel" placeholder="Telefono de contacto">
            
            <label class="form__label">Mesaje</label>
            <textarea class="form__control" name="" id="tema" placeholder="Tema a tratar" rows="5" cols="12" ></textarea>
            <small class="form__error ok fail" id="respuesta"></small>
            <button id="submit" type="submit" class="buton__form">Enviar</button>
        </form>
    </section>
    <section>
        <iframe title="Ubicación de Meisa MX" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3765.560208665229!2d-99.56701140850782!3d19.30148236724018!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85cd8abd8654e1a1%3A0xc0dbdbabbf1a84bf!2sSegunda%205%20de%20Mayo%2020%2C%20Reforma%2C%20Delegaci%C3%B3n%20Santa%20Mar%C3%ADa%20Totoltepec%2C%2052100%20Toluca%20de%20Lerdo%2C%20M%C3%A9x.!5e0!3m2!1ses!2smx!4v1658210888350!5m2!1ses!2smx" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </section>
    <footer>
        <?php
            include '../assets/components/footer.php';
        ?>
    </footer>
    <script src="../assets/js/index.js"></script>
    <script src="../assets/js/wh.js"></script>
</body>
</html>
