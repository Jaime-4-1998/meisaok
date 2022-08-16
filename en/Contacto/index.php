<!DOCTYPE html>
<html lang="es">
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="icon" type="image/png" sizes="32x32" href="../../assets/img/lg/icon.png">
      <meta name="theme-color" content="#bf1520"/>
      <meta name="description" content="Meisa ofrece un amplio catálogo de productos de maquinaria, equipo y accesorios de cualquier ramo de la industria" />
      <title>Meisa - Contacto</title>
      <link rel="preload" href="../../assets/css/style.css" as="style" onload="this.rel='stylesheet'">
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link rel="preload" href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500&display=swap" as="style" onload="this.rel='stylesheet'"> 
    </head>
<body>
    <header>
         <div class="header">
            <div class="first__column__head">
               <div class="img__head">
                  <img src="../../assets/img/lg/9800mei039087053.svg" loading="lazy" alt="Meisa MX" title="Meisa MX" width="50" height="100"/>
               </div>
            </div>
            <div class="second__column__head">
               <div class="content__header">
                  <a href="../../">Version Español (Clic Aquí)</a>
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
            include '../../assets/components/naveng.php';
        ?>
    </nav>
    <section>
         <a href="https://api.whatsapp.com/send?phone=5215535688727&text=Hola!&nbsp;me&nbsp;pueden&nbsp;apoyar?" target="_blank">
         <img src="../../assets/img/art/whatsappsvg.svg" loading="lazy" alt="Contacto de Meisa MX" title="Contacto de Meisa MX" class="icon__wh" width="4" height="100" />
         </a>
    </section>
    <section>
        <h1>
            <div class="text__cont">
                Contact
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
    <footer>
        <?php
            include '../assets/components/footeren.php';
        ?>
    </footer>
    <script src="../../assets/js/index.js"></script>
    <script src="../../assets/js/wh.js"></script>
</body>
</html>
