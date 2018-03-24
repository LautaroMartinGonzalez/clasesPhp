<?php
  session_start();
  var_dump($_SESSION);
  echo array_key_exists('contador',$_SESSION) ? $_SESSION['contador']: "no existe";
?>
