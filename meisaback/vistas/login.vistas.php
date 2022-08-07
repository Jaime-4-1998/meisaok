<!DOCTYPE html>
<html lang="es">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Login Meisa MX</title>
   <link rel="stylesheet" href="components/assets/css/style.css">
   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500&display=swap" rel="stylesheet"> 
</head>
<body>
   <header>
      <img src="components/assets/img/lg/9800mei039087053.svg" alt="Meisa MX" title="Meisa MX" />
   </header>
   <main>
      <hr class="color__red">
      <hr class="color__white">
      <hr class="color__black">
      <section>
         <h1>Administrador de Meisa MX</h1>
      </section>
      <section>
         <form action="<?php  htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
           <div class="form__center">
               <div class="form__input">
                  <label for="">Ingresa el Usuario</label>
                  <input type="text" class="input__form" onkeypress="return valideKey(event);" name="matri" placeholder="Tu Matricula" require autocomplete="on" />
               </div>
               <div class="form__input">
                  <label for="">Ingresa el Password</label>
                  <input type="password" class="input__form" name="password" placeholder="Tu Password" />
               </div>
               <div class="form__input">
                  <a href="Registrate">Registrar Usuario</a>
               </div>
            </div>
            <button type="submit">Iniciar Sesion</button>
         </form>
      </section>
   </main>
</body>
</html>