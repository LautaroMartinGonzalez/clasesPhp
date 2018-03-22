<?php
//  var_dump($_post);
foreach ($_POST as $nombreParametro => $valorParametro) {
	if (is_array($valorParametro)){
		echo "$nombreParametro tiene ".implode(",", array_keys($valorParametro))." <br>";
	} else {
		echo "$nombreParametro tiene $valorParametro <br>";
	}
}

 ?>


 <?php

 foreach (getallheaders() as $nombre => $valor) {
     echo "$nombre: $valor\n";
 }

 ?>
