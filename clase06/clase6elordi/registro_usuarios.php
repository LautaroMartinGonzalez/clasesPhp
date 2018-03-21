<?php

$usuario = array_key_exists('usuario', $_GET) && $_GET['usuario'] ? $_GET['usuario'] : null;

$edad = array_key_exists('edad', $_GET) && $_GET['edad'] ? $_GET['edad'] : null;

$email = array_key_exists('email', $_GET) && $_GET['email'] ? $_GET['email'] : null;

$submitted = array_key_exists('submitted', $_GET) && $_GET['submitted'] ? $_GET['submitted'] : null;

?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<form method="get" action="confirmacion.php">
		
		<label for="usuario">
			Nombre de usuario
		<?php if($submitted && !$usuario): ?>
			<span style="color:red;">* Error, ingrese usuario</span>
		<?php endif; ?>
		</label>
		<input type="text" name="usuario" value="<?= $usuario ?>">



		<br>
		<label for="edad">edad</label>
		<input type="number" name="edad" value="<?= $edad ?>">
		<br>
		<label for="email">email</label>
		<input type="email" name="email" value="<?= $email ?>">
		<br>

		<input type="hidden" name="submitted" value="1">

		<button type="submit">Enviar</button>
	</form>
</body>
</html>