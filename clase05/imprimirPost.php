<?php
  var_dump($_POST);
  var_dump($_POST["nombre"]);
  foreach ($_POST as $key => $value) {
    echo "$key tiene $value <br>";
  }
 ?>
