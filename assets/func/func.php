<?php

function obtenerBanners(){
  include 'meisaback/adminmeisa/assets/components/backend/conexion.php';
  $consulta = $mbd->prepare("SELECT * FROM banners ORDER BY prioridad ASC");
  $consulta->execute();
    return $consulta->fetchAll();
}
?>