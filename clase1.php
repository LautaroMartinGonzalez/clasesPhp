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
      echo "<br>";
      echo "<br>";
      echo "<br>";
      $auto=[
        "marca"=>"ford",
        "modelo"=>"focus",
        "color"=>["rojo","verde"],
        "Anio"=>"2010",
        "patente"=>"ab25bd"
      ];
      var_dump($auto);
      $auto[0]="jose";
      echo "<br>";
      echo "$auto[0]";
      $auto[14]="La nueva";
      echo "<br>";
      echo "$auto[14]";
      echo "<br>";
      $auto=[
        "polisa"=>"tin223"
      ];
      echo "$auto[polisa]";
      echo "<br>";
      $auto=[
        "patente"=>"dgin223"
      ];
      echo "$auto[patente]";
      echo "<br>";
      $auto=[
        0=>"sdsdfsd3"
      ];
      echo "$auto[0]";
//
      $entero=1;
      $decimal=1.2;
      echo "<br>";
      echo $entero+$decimal;
      echo "<br>";
      echo $entero-$decimal;
      echo "<br>";
      echo $entero/$decimal;
      echo "<br>";
      echo $entero*$decimal;
      echo "<br>";
      $resultado=($entero*2+$decimal)/$entero/2;
      echo "<br>";

      //7
      $hola="Hola";
      $mundo="mundo";
      $holaMundo=$hola." ".$mundo;
      echo $holaMundo;

     ?>

  </body>
</html>
