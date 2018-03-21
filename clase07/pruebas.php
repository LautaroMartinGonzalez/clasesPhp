<?php

// $auto = [
//     "Marca"=> "Ford",
//     "Color"=> "Negro"
// ];
//
// echo '<pre>';var_dump($auto);echo '</pre>';
//
//
// $jsonStr = json_encode($auto);
//
// var_dump($jsonStr);
//
// var_dump(json_decode($jsonStr));
// $miArray = json_decode($jsonStr,true);// lo convierte a string y no a objeto, como lo suele hacer
//
// var_dump($miArray);

$nombre_fichero = "algo.txt";
$gestor = fopen($nombre_fichero, "r");
$tamanio = filesize($nombre_fichero);
$contenido = fread($gestor, $tamanio);
fclose($gestor);
echo "$contenido";
?>
