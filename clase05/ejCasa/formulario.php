<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form action="imprimir.php" method="post">
      <label for="nombre">nombre:</label>
      <input type="text" name="nombre">
      <br>
      <label for="email">Email:</label>
      <input type="text" name="email">
      <br>
      <label for="hobbies">Hobbies</label>
      <input type="checkbox" name="hobbies[bajo]">bajo
      <input type="checkbox" name="hobbies[cine]">cine
      <input type="checkbox" name="hobbies[putas]">putas
      <br>
      <label for="sexo">Sexo</label>
      <input type="radio" name="sexo" value="masc">Masc
      <input type="radio" name="sexo" value="fem">Fem
      <br>
      <label for="select">como dormiste anoche</label>
      <select name="como dormiste">
        <?php
          for($i=1;$i<=10;$i++){
          echo "<option value='$i'>$i</option>";
          }
        ?>
      </select>
      <br>
      <input type="submit">
    </form>
  </body>
</html>
