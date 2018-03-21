<?php

function hobbieValido($hobbie) {
	$count = strlen($hobbie);
	return $count > 3 && $count < 15 ? true:false;
}

echo "Hola mundo!\n";

$nombre = readline("Ingrese su nombre: ");

echo "Bienvenido $nombre\n";

$edad = intval(readline("Ingrese su edad: "));

if ($edad < 18) {
	echo "Usted no esta autorizado en el sistema";
	exit;
}

echo "Autorización exitosa\n";

$hobbies = readline("Ingrese sus hobbies separados por ,");

$listaDeHobbies = explode(",",$hobbies);

$listaDeHobbiesValidos = [];

foreach ($listaDeHobbies as $posicion => $hobbie) {
	if(hobbieValido($hobbie)) {
		$confirmacion = readline("Usted confirma que le gusta $hobbie?");
		if ($confirmacion) {
			$listaDeHobbiesValidos[] = $hobbie;	
		}	
	}
}

echo "Nombre: $nombre\n";
echo "Edad: $edad\n";
echo "Hobbies: ".implode(",",$listaDeHobbiesValidos);
echo "\n";

?>