<!DOCTYPE html>
<html>
   <head>
      <title>E-learning | TESI</title>
      <link rel="shortcut icon" type="image/png" href="assets/images/tesi.png" />
      <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet" />
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous" />
      <link rel="stylesheet" type="text/css" href="assets/css/style.css" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <meta http-equiv="X-UA-Compatible" content="ie=edge" />
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script></script>
      <script src="https://code.jquery.com/jquery-latest.js"></script>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
   </head>
   <body>
      <div class="container" id="container">
     
         <div class="form-container sign-in-container">
               <form action="<?php htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
                        <div class="espacio-responsive"></div>
                        <h1 class="titulo">Crear Cuenta</h1>
                        <div class="espacio"></div>
                           <!--nombre <div class="col-6">
                              <input type="texto" onkeypress="return Letras(event)" required autocomplete="off" placeholder="Nombre" name="nombre"  minlength="4" maxlength="40"  pattern="[A-Za-z0-9]+" title="Tu nombre debe de tener por lo menos de 4 a 40 con puras letras">
                           </div>
                           -->
                              <input type="tel"  onkeypress="return valideKey(event);" name="matri" placeholder="Teclea tu matricula..." required>    
                              <select name="rol">
                                 <option value="">Selecciona que eres</option>
                                
                                 <option value="meisa">Meisa</option>
                                 <option value="profe">Profesor</option>
                              </select>
                                 <input type="password" required placeholder="Contraseña" name="password" id="pass"> 
                                 <p class="aviso"  id="passstrength"></p>
                                 <div class="adios">
                                    <h5 id="signU" class="form-text text-muted">Si ya tienes cuenta... <a href="login" class="color">Da un clic Aqui</a> </h5>
                                 </div>
                        <div class="espacio-1"></div>
                                                   
                                    <?php if (!empty($errores)): ?>
                                          <ul>
                                             <?php echo $errores; ?>
                                          </ul>
                                          <?php endif; ?>
                        <button>Registrar mi Cuenta</button>
               </form>
                  <script>
                        $('#pass').keyup(function(e) {
                           var strongRegex = new RegExp("^(?=.{8,})(?=.*[A-Z])(?=.*[a-z])(?=.*[0-9])(?=.*\\W).*$", "g");
                           var mediumRegex = new RegExp("^(?=.{7,})(((?=.*[A-Z])(?=.*[a-z]))|((?=.*[A-Z])(?=.*[0-9]))|((?=.*[a-z])(?=.*[0-9]))).*$", "g");
                           var enoughRegex = new RegExp("(?=.{6,}).*", "g");
                           if (false == enoughRegex.test($(this).val())) {
                                    $('#passstrength').html('Ingresa mas letras,caracteres y numeros.');
                           } else if (strongRegex.test($(this).val())) {
                                    $('#passstrength').className = 'ok';
                                    $('#passstrength').html('Fuerte, ya puedes iniciar Sesion!');
                           } else if (mediumRegex.test($(this).val())) {
                                    $('#passstrength').className = 'alert';
                                    $('#passstrength').html('Media te hacen faltan un caracter!');
                           } else {
                                    $('#passstrength').className = 'error';
                                    $('#passstrength').html('Débil,te hace falta mas seguridad!');
                           }
                           return true;
                        });
                  </script>
         </div>
      </div>
   </body>
</html>
<script src="assets/js/letras.js"></script>
<script src="assets/js/numeros.js"></script>





