<?php

$contenido = file_get_contents("categorias.json");
$categorias = json_decode($contenido, true);


	var_dump($_GET);
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<div>
		<form>
			<?php foreach ($categorias['categorias'] as $key => $categoria):?>

				<input type="checkbox" name="categoria[<?=$categoria['id']?>]" value="<?=$categoria['id']?>">
				<?= $categoria['nombre'] ?>


			<?php endforeach; ?>

			<button type="submit">Submit</button>
		</form>
	</div>
</body>
</html>