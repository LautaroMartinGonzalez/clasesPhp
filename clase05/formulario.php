<!DOCTYPE HTML>
<html>
<body>
<form action = "imprimir.php" method = "post" >
    <label for = "nombre" > Nombre : </label>
    <input type = "text" name = "nombre" >
    <br>
    <label for = "email" > E - mail : </label>
    <input type = "text" name = "email" >
    <br>
    <label for = "Hobbies" > Hobbies : </label>
    <input type="checkbox" name="Hobbies[Futbol]" >Futbol
    <input type="checkbox" name="Hobbies[Bajo]" >Bajo
    <input type="checkbox" name="Hobbies[cine]" >Cine
    <br>
    <label for = "Sexo" > Sexo : </label>
    <input type="radio" name="Sexo" value="masc">Masc
    <input type="radio" name="Sexo" value="Fem">Fem
    <br>
    <label for = "Select" > Como dormiste anoche? : </label>
    <select name="Como dormiste">
      <?php
        for($i=1;$i<=10;$i++){
        echo "<option value='$i'>$i</option>";
        }
      ?>

    </select>
    <br>
    <input type = "submit" >
    <br>
  </form>
</body>
</html>
