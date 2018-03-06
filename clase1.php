<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      $animales=["gato","perro","tigre","mono","elefante"];
      var_dump($animales);
      //a
      $animales[]="gorila";
      $animales[]="vivora";
      var_dump($animales);
//b
      echo "Me gusta " . $animales[0]. " , ". $animales[4]. " , ". $animales[1]. " , ". $animales[2]. " , ";
      //c
      $animales[0]="tero";
      echo "$animales[0]";

      //5
      $auto=[
        
      ]





     ?>

  </body>
</html>
