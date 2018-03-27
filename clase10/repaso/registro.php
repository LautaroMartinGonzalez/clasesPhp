<?php
	include('funciones.php');

	session_start();

	if (existeParametro('usuario',$_SESSION)) {
		header("Location: perfil.php");
		exit;
	}

	$nombre = dameValorDeParametro('nombre',$_POST);
	$email = dameValorDeParametro('email',$_POST);
	$password = dameValorDeParametro('password',$_POST);
	$existeFile = existeFileSinError('imagen');

	$infoUsuario = [];

	$error = false;

	if (existeParametro('submit', $_POST)) {

		if ($nombre && $email && $password && $existeFile) {

			$infoUsuario = dameInfoUsuarioPorCampo('email',$email);

			if ($infoUsuario['existe']) {
				$error = true;
			} else{
				guardarUsuario([
					'nombre'=>$nombre,
					'email' => $email,
					'password' => password_hash($password,PASSWORD_DEFAULT),
					'id' => $infoUsuario['proximoId']+1,
					'imagen' => guardarArchivoSubido('imagen')
				]);
				header("Location: login.php");
				exit;
			}

		} else {
			$error = true;
		}

	}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Registro de usuarios</title>
</head>
<body>

	<form method="post" enctype="multipart/form-data">

		<?php if($error && array_key_exists('existe', $infoUsuario) && $infoUsuario['existe']): ?>
			<p>
				<span>Error: el usuario ya existe en la base de datos</span>
			</p>

		<?php endif; ?>


		<p>
			<label for="nombre">Nombre</label>
			<input type="text" name="nombre" value="<?= $nombre ?>">
			<?php if($error && !$nombre):?>
				<span>Ingrese su nombre</span>
			<?php endif; ?>
		</p>

		<p>
			<label for="email">Email</label>
			<input type="email" name="email" value="<?= $email ?>">
			<?php if($error && !$email):?>
				<span>Ingrese su email</span>
			<?php endif; ?>
		</p>

		<p>
			<label for="password">Password</label>
			<input type="password" name="password">
			<?php if($error && !$password):?>
				<span>Ingrese su password</span>
			<?php endif; ?>
		</p>

		<p>
			<label for="imagen">Imagen</label>
			<input type="file" name="imagen">
			<?php if($error && !$existeFile):?>
				<span>Ingrese su imagen</span>
			<?php endif; ?>
		</p>

		<p>
			<input type="submit" name="submit">
		</p>

	</form>

</body>
</html>
