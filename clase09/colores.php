<?php
	session_start();
	$color = 'transparent';
	if (array_key_exists('color', $_GET)) {
		$_SESSION['color'] = $_GET['color'];
	}

  if (array_key_exists('accion',$_GET)&&$_GET['accion']=='reiniciar') {
    session_destroy();
    unset($_SESSION['color']);
  }

	if (array_key_exists('color', $_SESSION)) {
		$color = $_SESSION['color'];
	}



?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body style="background-color: <?= $color?>">
	<form>
		<select name="color">
			<option value="red">Red</option>
			<option value="green">Green</option>
			<option value="yellow">Yellow</option>
		</select>
		<input type="submit"/>
    <button type="button" name="reiniciar"><a href="colores.php?accion=reiniciar">REINICIAR</a> </button>
	</form>
</body>
</html>
