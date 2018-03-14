<?php
  var_dump($_GET);
  var_dump($_GET["nombre"]);
  foreach ($_GET as $key => $value) {
    echo "$key tiene $value <br>";
  }
 ?>
