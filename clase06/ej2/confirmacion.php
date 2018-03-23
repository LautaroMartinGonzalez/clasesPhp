<!-- <p>muchas gracias por reg <?= $_POST['usuario'] ?>  edad <?= $_POST['edad']?> Email
<?= $_POST['email']?> </p> -->


<?php


  function redirectToForm()
  {
    header("Location: registro_usuarios.php?".$_SERVER['QUERY_STRING']);
    exit;
  }
  function chequeo($value)
  {
    if (array_key_exists($value,$_POST)&&$_POST[$value]) {
      return $_POST[$value];
    }else {
      redirectToForm();
    }
  }
  $usuario=chequeo('usuario');
  $edad=chequeo('edad');
  $email=chequeo('email');


 ?>
 <p>muchas gracias por reg <?= $usuario ?>  edad <?= $edad?> Email
 <?= $email?> </p>

  <?php var_dump($_POST) ?>
