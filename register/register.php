<?php

function guardarArchivoSubido($nombreDelInputFile) {
	if (array_key_exists($nombreDelInputFile, $_FILES)) {
		$file = $_FILES[$nombreDelInputFile];

		$nombre = $file['name'];
		$tmp = $file['tmp_name'];
		$ext = pathinfo($nombre, PATHINFO_EXTENSION);

		$carpetaDondeEstoy = dirname(__FILE__);
		$carpetaDondeQuieroGuardar = $carpetaDondeEstoy . "/archivos/";

		if(!file_exists($carpetaDondeQuieroGuardar)) {
			$old = umask(0);
			mkdir($carpetaDondeQuieroGuardar, 0777);
			umask($old);
		}

		$date = new DateTime();

		$urlFinalConNombreYExtension = $carpetaDondeQuieroGuardar . "imagen_".$date->getTimestamp()."." . $ext;

		move_uploaded_file($tmp, $urlFinalConNombreYExtension);

		return $urlFinalConNombreYExtension;
	}
}

function existeUsuario($usuario) {
	$usuarios = json_decode(file_get_contents('usuarios.json'),true);

	$last_id = 0;
	$existe = false;

	if(!is_null($usuarios)) {

		foreach ($usuarios as $key => $usuarioEnArchivo) {
			$last_id = $last_id > $usuarioEnArchivo['id'] ? $last_id: $usuarioEnArchivo['id'];
			if ($usuarioEnArchivo['email'] == $usuario['email']) {
				$existe = true;
			}
		}

	}

	return [
		'last_id' => $last_id,
		'existe'  => $existe
	];
}

function guardarUsuario($usuario, $last_id) {

	$fileName = 'usuarios.json';

	if (!file_exists($fileName)) {
		file_put_contents($fileName, "{}");
	}

	$usuarios = json_decode(file_get_contents($fileName),true);

	if (is_null($usuarios)) {
		$usuarios = [];
	}

	$usuarios[] = array_merge($usuario,['id'=>$last_id+1]);

	file_put_contents($fileName, json_encode($usuarios, JSON_PRETTY_PRINT));
}

$camposDeUsuario = [
	'email' => 'dato',
	'password' => 'dato',
	'avatar' => 'file'
];

$usuario = [];

foreach ($camposDeUsuario as $nombreCampo => $tipoDato) {

	switch ($tipoDato) {
		case 'dato':
			if(array_key_exists($nombreCampo, $_POST) && $_POST[$nombreCampo]) {

				if ($nombreCampo == 'password') {
					$usuario[$nombreCampo] = password_hash($_POST[$nombreCampo], PASSWORD_DEFAULT);
				} else {
					$usuario[$nombreCampo] = $_POST[$nombreCampo];
				}
			}
		break;
		case 'file':
			if(array_key_exists($nombreCampo, $_FILES) && $_FILES[$nombreCampo]['error'] === UPLOAD_ERR_OK) {
				$usuario[$nombreCampo] = guardarArchivoSubido($nombreCampo);
			}
		break;
		default:
			break;
	}

}

if (array_key_exists('submitted', $_POST) && $_POST['submitted'] && count($camposDeUsuario) == count($usuario)) {

	$existeArray = existeUsuario($usuario);

	if(!$existeArray['existe']) {
		guardarUsuario($usuario, $existeArray['last_id']);

		header("Location: login.php");
		exit;

	} else {
		echo "El usuario ya existe!";
	}

} else if (array_key_exists('submitted', $_POST) && $_POST['submitted']) {
	echo "Complete correctamente los datos";
}


?>
<html>
<head>
	<title>Registro</title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</head>
<body>

	<div class="container">
		<form autocomplete="off" method="post" enctype="multipart/form-data">
		  <div class="form-group">
		    <label for="email">Email</label>
		    <input type="email" class="form-control" name="email" aria-describedby="emailHelp" placeholder="Enter email" value="<?= array_key_exists('email', $_POST)? $_POST['email']:null ?>">
		  </div>
		  <div class="form-group">
		    <label for="password">Password</label>
		    <input type="password" class="form-control" name="password" placeholder="Password" value="<?= array_key_exists('password', $_POST)? $_POST['password']:null ?>">
		  </div>
		  <div class="form-check">
		    <label for="avatar">avatar</label>
		    <input type="file" class="form-control" name="avatar">
		  </div>

			<input type="hidden" name="submitted" value="1">

		  <button type="submit" class="btn btn-primary">Submit</button>

		</form>
	</div>

</body>
</html>
