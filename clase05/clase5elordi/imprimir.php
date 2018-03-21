<?php
	var_dump($_POST);

var_dump($_POST["nombre"]);

foreach ($_POST as $nombreParametro => $valorParametro) {
	if (is_array($valorParametro)){
		echo "$nombreParametro tiene ".implode(",", array_keys($valorParametro))." <br>";
	} else {
		echo "$nombreParametro tiene $valorParametro <br>";
	}
}


?>