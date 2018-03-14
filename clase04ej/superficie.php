<?php
  function triangulo ($base,$altura){
    global $funcionesEjecutadas;
    $funcionesEjecutadas++;
    return ($base*$altura/2);
  }
  function rectangulo ($alto,$ancho){
    global $funcionesEjecutadas;
    $funcionesEjecutadas++;

    return $alto*$ancho;
  }
  function cuadrado ($lado){
    global $funcionesEjecutadas;
    $funcionesEjecutadas++;
    return $lado*$lado;
  }
  function circulo ($radio){
    global $funcionesEjecutadas;
    $funcionesEjecutadas++;
    return pi()*$radio*$radio;
  }
 ?>
