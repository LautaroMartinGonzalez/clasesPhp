<?php 
echo '<pre>';var_dump($_GET);echo '</pre>';
echo '<pre>';var_dump($_GET['versionCorta']);echo '</pre>';
echo '<pre>';var_dump(intval($_GET['versionCorta']));echo '</pre>';

if( 
	!array_key_exists('versionCorta', $_GET) || 
	array_key_exists('versionCorta', $_GET) &&  !intval($_GET['versionCorta'])) {

	echo "Versión corta no activada";

} else {
	echo "Usted activó la versión corta";
}


?>