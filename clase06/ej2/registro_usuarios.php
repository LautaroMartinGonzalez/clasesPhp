<?php
  $usuario= array_key_exists('usuario',$_GET)&& $_GET('usuario')? $_GET('usuario') : null;
  $edad=array_key_exists('edad',$_GET)&& $_GET('edad')? $_GET('edad'):null;
  $email=array_key_exists('email',$_GET)&&$_GET('email')? $_GET('email'):null;
  $submitted=array_key_exists('submitted',$_GET)&&$_GET('submitted')? $_GET('submitted'):null;
 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form action="confirmacion.php" method="get">
      <label for="usuario">usuario</label>
      <?php if (condition): ?>

      <?php endif; ?>
      <input type="text" name="usuario" value="<?= $usuario ?>">

      <input type="hidden" name="submitted" value="1">
    </form>
  </body>
</html>
