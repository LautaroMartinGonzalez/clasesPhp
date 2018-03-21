<?php 

$array =[ 'a'=>1, 'b'=>2, 'c'=>'Yo <3 JSON'];

$aux = json_encode($array);

$array2 = json_decode($aux,true);

var_dump ($array2);

echo $array2['c']." | 1 | 2 |";

 ?>