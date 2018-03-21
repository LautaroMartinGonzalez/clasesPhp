<?php

$usuario = null;
$edad = null;
$email = null;

function redirectToForm() {
	header("Location: registro_usuarios.php?".$_SERVER['QUERY_STRING']);
	exit;	
}

if (array_key_exists('usuario', $_GET) && $_GET['usuario']) {
	$usuario = $_GET['usuario'];
} else {
	redirectToForm();
}

if (array_key_exists('edad', $_GET) && $_GET['edad']) {
	$edad = $_GET['edad'];
} else {
	redirectToForm();
}

if (array_key_exists('email', $_GET) && $_GET['email']) {
	$email = $_GET['email'];
} else {
	redirectToForm();
}

echo "Datos correctos<br>";
var_dump($_GET);


?>