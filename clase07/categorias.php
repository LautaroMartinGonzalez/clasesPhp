<?php

$contenido = file_get_contents("categorias.json");
$categorias = json_decode($contenido, true);//en una linea, $categorias = json_decode(file_get_contents("categorias.json"), true);

var_dump($categorias);

?>
