<?php session_start();

require '../components/php/Sesion.php';
require '../components/php/functions.php';


if (!isset($_SESSION['identificador'])) {
  header('Location: '.RUTA.'../login.php');
}

$conexion = conexion($bd_config);
$user = iniciarSession('usuarios', $conexion);

if ($user['type'] == 'meisa') {
  $user = iniciarSession('usuarios', $conexion);


  require 'Administrador.vistas.php';
} else {
  header('Location: '.RUTA.'index.php');
}
?>
