<?php

if (array_key_exists('accion',$_GET)&&
  in_array($_GET["accion"],['sumar','reiniciar'])) {
  session_start();
  if(!array_key_exists('contador',$_SESSION)){
    $_SESSION['contador']=0;
  }
  switch ($_GET["accion"]) {
    case 'sumar':
      $_SESSION['contador']++;
      break;
    case 'reiniciar':
      session_destroy();
      break;

    default:
      break;
  }
}
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <button type="button" name="reiniciar"><a href="modificar.php?accion=reiniciar">REINICIAR</a> </button>
    <button type="button" name="sumar"><a href="modificar.php?accion=sumar">SUMAR</a> </button>
  </body>
</html>
