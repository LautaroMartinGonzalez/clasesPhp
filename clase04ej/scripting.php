<?php
echo "Ingrese su nombre: ";
$nombre = readline("Ingrese su nombre: ");
echo "Bienvenido $nombre";
echo "Ingrese su Edad: ";
$edad = readline("“Ingrese su Edad: ");
function hobbyValido($string){
  $largo=strlen($string);
  return $largo<15 and $largo>3;
}
echo "Ingrese sus hobbys separados por ,: ";
$hobby = readline("Ingrese sus hobbys separados por ,: ");
//var_dump(hobbyValido($hobby));
$hobbies = explode(",", $hobby);
$hobbiesConf="";
foreach ($hobbies as $valor) {
  if (hobbyValido($valor)) {
    echo "Usted confirma que le gusta $valor?";
    $confirma = readline("Usted confirma : ");
    if ($confirma=="si") {
      $hobbiesConf.=$valor.", ";
    }
  }
}
echo "Nombre: ".$nombre;
echo "<br>";
echo "Edad: ".$edad;
echo "<br>";
echo "Hobbies: ".$hobbiesConf;
echo "<br>";
 ?>
