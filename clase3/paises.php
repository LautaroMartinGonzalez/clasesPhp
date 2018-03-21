<?php

$ceu = [
    "Argentina"    => ["Buenos Aires", "Córdoba", "Santa Fé"],
    "Brasil" => ["Brasilia", "Rio de Janeiro", "Sao Pablo"],
    "Colombia" => ["Cartagena", "Bogota", "Barranquilla"],
    "Francia" => ["Paris", "Nantes", "Lyon"],
    "Italia" => ["Roma", "Milan", "Venecia"],
    "Alemania" => ["Munich", "Berlin", "Frankfurt"],
    "Grecia" => []
];

$ceu = [
    "Argentina" => [
        "ciudades" => ["Buenos Aires", "Córdoba", "Santa Fé"],
        "esAmericano" => true
    ]
]

foreach ($ceu as $pais => $provincias) {
    if (!$ceu[$pais]["esAmericano"]) {
        continue;
    }
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