<?php

$lista = ['pepe','pipo'];

echo "<ul>";
foreach ($lista as $key => $value) {
	echo "<li>$value</li>";
}
echo "</ul>";

?>

<ul>
	<?php foreach ($lista as $key => $value): ?>
		<li><?= $value ?></li>
	<?php endforeach; ?>
</ul>