<?php if (isset($_POST["name"])&&isset($_POST["edad"])&&isset($_POST["email"])&&$_POST["name"]&&$_POST["edad"]&&$_POST["email"]): ?>
  <p>Muchas Gracias por registrarte <?= $_POST["name"] ?>, nos has dicho que tienes <?= $_POST["edad"] ?> años.
Hemos registrado tu email, <?= $_POST["email"] ?></p>
<?php else: ?>
 <p>Faltan datos</p>
<?php endif; ?>
<?php var_dump(is_null($_POST["edad"])); ?>
