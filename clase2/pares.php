<?php

$ceu = [
	"Argentina"	=> ["Buenos Aires", "Córdoba", "Santa Fé"],
	"Brasil" => ["Brasilia", "Rio de Janeiro", "Sao Pablo"],
	"Colombia" => ["Cartagena", "Bogota", "Barranquilla"],
	"Francia" => ["Paris", "Nantes", "Lyon"],
	"Italia" => ["Roma", "Milan", "Venecia"],
	"Alemania" => ["Munich", "Berlin", "Frankfurt"],
	"Grecia" => []
];

foreach ($ceu as $pais => $provincias) {
	if (count($provincias)) {
		echo "<p>Las ciudades de $pais son:</p>";
		echo "<ul>";
		foreach ($provincias as $nombre) {
			echo "<li>$nombre</li>";
		}
		echo "</ul>";
	} else {
		echo "<p>$pais no tiene provincias</p>";
	}
}


?>