<?php
/*  $tope=10;
  $inicio=0;
  $paso=$inicio;
  for( ;$paso<$tope;$paso++){

    if ($paso%2==0) {
      echo "es par";
      continue;
    }
    echo "<pre>"; var_dump($paso);echo "<pre>";
  }

  //ejercio 01
      for($i=1;$i<=100;$i++){
        echo $i;
        echo "<br>";
      }
      *//*
  //ejercio 02
      $inicio=1;
      $tope=100;
      $paso=$inicio;
      $random=rand($inicio,$tope);
      for(;$paso<=$tope;$paso++){
        if($paso==$random){
          break;
        }
        echo $paso;
        echo "<br>";
      }*/
      //ejercio 03
      // $multiplo=2;
      // for ($i=0; $i <=10 ; $i++) {
      //   echo $multiplo."X".$i."=".$multiplo*$i;
      //   echo "<br>";
      //
      //
      // }
      // $inicio=1;
      // $tope=10;
      // for ($paso=$inicio; $paso <= $tope; $paso=$paso+2) {
      //   echo $paso;
      //   echo "<br>";
      // }
      // //ejercio 04
      // $inicio=100;
      // $tope=85;
      // $paso=$inicio;
      // while ($paso != $tope-1) {
      //   echo $paso;
      //   echo "<br>";
      //   $paso--;
      //}
      //ejercio 05
      // $contador=1;
      // echo "<br>";
      // echo "<br>";
      // while ($contador <= 5) {
      //   echo $contador*2;
      //   $contador++;
      //   echo "<br>";
      // }


      //ejercio 06
      // function tirarMoneda(){
      //   return rand(0,1);
      // }
      // $jugadas=0;
      // $contador=0;
      // while ($contador<5) {
      //   $moneda=tirarMoneda();
      //   if ($moneda) {//es moneda porque si es 0 es false
      //     $contador++;
      //   }
      //   $jugadas++;
      // }
      // echo "$jugadas";

      //ejercio 07
      // function tirarMoneda(){
      //   return rand(0,1);
      // }
      // $jugadas=0;
      // $gane=false;
      // do {
      //   $moneda=tirarMoneda();
      //   if ($moneda) {//es moneda porque si es 0 es false
      //     $gane=true;
      //     echo "gane";
      // }}while (!$gane);
      //Version 2
          // function tirarMoneda() {
          //     return rand(0,1);
          //   }
          //
          // $jugadas = 0;
          // $gane = false;
          // do {
          //     $moneda = tirarMoneda();
          //     if ($moneda) {
          //         $gane = true;
          //         echo "Gane!";
          //     }
          //     $jugadas++;
          // } while (!$gane);
          //
          // echo $jugadas;
          // echo "<br>";

  //ejercio 09
  //
  // $nombres = ['pepe','pipo','pato','pedro','pluto'];
  //
  // for ($i=0; $i < count($nombres); $i++) {
  // echo "En la posición $i figura el nombre $nombres[$i] <br>";
//}

// EJEMPLO FOR EACH
// $nombres = ["pepe", "pablo"];
//
// var_dump($nombres);
//
// for ($i=0; $i < count($nombres); $i++) {
//     echo "$i tiene $nombres[$i]<br>";
// }
//
// foreach ($nombres as $i => $value) {
//     echo "$i tiene $value<br>";
// }
  //ejercio 13
  /*
  $ceu = array( "Italia"=>"Roma", "Luxembourg"=>"Luxembourg", "Bélgica"=> "Bruselas",
"Dinamarca"=>"Copenhagen", "Finlandia"=>"Helsinki", "Francia" => "Paris",
"Slovakia"=>"Bratislava", "Eslovenia"=>"Ljubljana", "Alemania" => "Berlin", "Grecia" => "Athenas",
"Irlanda"=>"Dublin", "Holanda"=>"Amsterdam", "Portugal"=>"Lisbon", "España"=>"Madrid",
"Suecia"=>"Stockholm", "Reino Unido"=>"London", "Chipre"=>"Nicosia", "Lithuania"=>"Vilnius",
"Republica Checa"=>"Prague", "Estonia"=>"Tallin", "Hungría"=>"Budapest", "Latvia"=>"Riga",
"Malta"=>"Valletta", "Austria" => "Vienna", "Polonia"=>"Warsaw") ;
natcasesort($ceu);
foreach ($ceu as $pais => $capital) {
  echo "La capital de $pais es $capital <br>";
}
*/
//Ejercio 14

$ceu = [
"Argentina" => ["Buenos Aires", "Córdoba", "Santa Fé", "esAmericano"=>true],
"Brasil" => ["Brasilia", "Rio de Janeiro", "Sao Pablo","esAmericano"=>true],
"Colombia" => ["Cartagena", "Bogota", "Barranquilla","esAmericano"=>true],
"Francia" => ["Paris", "Nantes", "Lyon","esAmericano"=>false],
"Italia" => ["Roma", "Milan", "Venecia","esAmericano"=>false],
"Alemania" => ["Munich", "Berlin", "Frankfurt","esAmericano"=>false]];
foreach ($ceu as $pais => $ciudades) {
//$ceu[$pais[$esAmericano]]
  echo "Las ciudades de $pais son: <br>";
  foreach ($ciudades as $key => $value) {
    echo "* $value <br> ";
  }
}

 ?>
