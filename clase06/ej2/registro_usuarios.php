<?php
 $usuario= array_key_exists('usuario',$_POST)&& $_POST['usuario']? $_POST['usuario'] : null;
 $edad=array_key_exists('edad',$_POST)&& $_POST['edad']? $_POST['edad']:null;
 $email=array_key_exists('email',$_POST)&&$_POST['email']? $_POST['email']:null;
 $submitted=array_key_exists('submitted',$_POST)&&$_POST['submitted']? $_POST['submitted']:null;

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form action="" method="POST">
      <label for="usuario">usuario</label><br>
      <?php if ($submitted&&!$usuario): ?>
        <span style="color:red">Error. ingese usuario</span>
      <?php endif; ?>
      <input type="text" name="usuario" value="<?= $usuario ?>"><br>

      <label for="email">Email</label><br>
      <input type="email" name="email" value="<?= $email?>">
      <?php if ($submitted&&!$email): ?>
        <span style="color:red">ERROR falta mail</span>
      <?php endif; ?>

      <br>
  		<label for="edad">edad</label>
  		<input type="number" name="edad" value="<?= $edad ?>">
      <?php if ($submitted&&!$edad): ?>
        <span style="color:red">error</span>
      <?php endif; ?>
  		<br>
      <input type="hidden" name="submitted" value="1">
      <button type="submit">Enviar</button>
    </form>
    <?php var_dump($_SERVER['QUERY_STRING']) ?>
  </body>
</html>
