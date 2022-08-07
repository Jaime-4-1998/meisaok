<?php session_start();

require 'components/php/Sesion.php';
require 'components/php/functions.php';

$errores = '';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $identificador = $_POST['matri'];
  $password = $_POST['password'];
  $password = hash('sha512', $password);

  $conexion = conexion($bd_config);
  $statement = $conexion->prepare('SELECT * FROM users WHERE identificador = :identificador AND pass_cont = :pass_cont');
  $statement->execute([
    ':identificador' => $identificador,
    ':pass_cont' => $password
  ]);
  $resultado = $statement->fetch();

  if ($resultado !== false) {
    $_SESSION['identificador'] = $identificador;
    header('Location: '.RUTA.'index.php');
  } else {
    $errores .= '<li class="error">Tu usuario y/o contraseña son incorrectos</li>';
  }

}
require 'vistas/login.vistas.php';

 ?>
