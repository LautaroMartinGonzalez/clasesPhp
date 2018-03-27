<?php
	include('funciones.php');

	session_start();

	if (existeParametro('usuario',$_SESSION)) {
		header("Location: perfil.php");
		exit;
	}

	$email = dameValorDeParametro('email',$_POST);
	$password = dameValorDeParametro('password',$_POST);

	$infoUsuario = [];

	$error = false;
	$passwordError = false;

	if (existeParametro('submit', $_POST)) {

		if($email && $password) {

			$infoUsuario = dameInfoUsuarioPorCampo('email',$email);

			if ($infoUsuario['existe']) {

				if (password_verify($password, $infoUsuario['usuario']['password'] )) {


					$_SESSION['usuario'] = $infoUsuario['usuario'];
					header("Location: perfil.php");
					exit;

				} else {
					$error = true;
					$passwordError = true;
				}

			} else {
				$error = true;
			}

		} else {
			$error = true;
		}
	}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Login de usuario</title>
</head>
<body>

	<form method="post">

		<?php if($error && array_key_exists('existe', $infoUsuario) && !$infoUsuario['existe']): ?>
			<p>
				<span>Error: el usuario no existe en la base de datos</span>
			</p>

		<?php endif; ?>

		<?php if($error && $passwordError): ?>
			<p>
				<span>Error: La clave es invalida</span>
			</p>

		<?php endif; ?>

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
			<input type="submit" name="submit">
		</p>

		<p>
			No tenes un usuario?
			hace <a href="./registro.php">Click acá</a>
		</p>

	</form>

</body>
</html>
