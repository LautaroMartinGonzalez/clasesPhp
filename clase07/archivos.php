<?php

function ensureFile($url) {
    return fopen($url, "a+");
}

$fp=ensureFile("texto.txt");

for ($i=0; $i <10 ; $i++) {
    fwrite($fp, "Hola mundo\n");
}
echo "Leemos el contenido entero<br>";
var_dump(file_get_contents("texto.txt"));

fclose($fp);
$fp=ensureFile("texto.txt");

echo "Ahora leemos linea por linea<br>";
while (($linea = fgets($fp)) !== false) {
    echo $linea;
}

fclose($fp);
unlink("texto.txt");

?>
