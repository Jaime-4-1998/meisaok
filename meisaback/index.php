<?php session_start();
require 'components/php/Sesion.php';
require 'components/php/functions.php';
if (isset($_SESSION['identificador'])) {
  $conexion = conexion($bd_config);
  $usuario = iniciarSession('usuarios', $conexion);
  if ($usuario['type'] == 'meisa') {
    header('Location: '.RUTA.'adminmeisa/Administrador');
  }  
    elseif ($usuario['type'] == 'alu') {

      $alumnos = veralumno('alumno', $conexion);
      if(empty($alumnos)){
        header('Location: '.RUTA.'alumnos/Perfil');
      }else{
        header('Location: '.RUTA.'alumnos/Inicio');
      }
      
      } elseif ($usuario['type'] == 'profe') {
          $profesor = verprofe('profesor', $conexion);
            if(empty($profesor)){
              header('Location: '.RUTA.'docentes/Perfil-Docente');
            }else{
              header('Location: '.RUTA.'docentes/Profesor');
            }
      } 
        else {
        header('Location: '.RUTA.'login');
      }
    } else {
      header('Location: '.RUTA.'login');
    }
 ?>
