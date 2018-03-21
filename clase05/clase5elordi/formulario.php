<!DOCTYPE HTML>
<html>  
<body>

<form action="imprimir.php" method="post" enctype="multipart/form-data">
	<label for="nombre">Nombre:</label>
	<input type="text" name="nombre">
	<br>
	<label for="email">E-mail:</label>
	<input type="text" name="email">
	<br>
	<label for="hobbies">Hobbies:</label>
	<input type="checkbox" name="hobbies[futbol]">futbol
	<input type="checkbox" name="hobbies[hockey]">hockey
	<input type="checkbox" name="hobbies[basquet]">basquet
	<br>
	<label for="sexo">Sexo:</label>
	<input type="radio" name="sexo" value="femenino"> F
	<input type="radio" name="sexo" value="masculino"> M

	<br>
	<label for="comoDormiste">¿Cómo dormiste anoche?</label>
	<select name="comoDormiste">
		<?php 
			for($i = 1; $i <= 10; $i++){
				echo "<option value='$i'>$i</option>";
			}
		?>		
	</select>
	<br>

	<input type="file" name="avatar">

	<input type="submit">
</form>

</body>
</html>
