<?php
  $funcionesEjecutadas;
  $funcionesEjecutadas=0;
  include 'funciones.php';
  include 'superficie.php';
  function tresCirculos($radio1,$radio2,$radio3){
    return mayor(circulo($radio1),circulo($radio2),circulo($radio3));
  }
 ?>
