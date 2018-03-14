<?php
	function imprimir($datos){
		global $funcionesEjecutadas;
    $funcionesEjecutadas++;
		echo "<pre>"; var_dump($datos); echo "</pre>";
	}

	function maximo($n1,$n2){
		global $funcionesEjecutadas;
    $funcionesEjecutadas++;
		return $n1 >= $n2 ? $n1 : $n2;
	}

	function mayor($n1,$n2,$n3=null){
		global $funcionesEjecutadas;
    $funcionesEjecutadas++;
		if ($n3==null) {
			global $numeroMagico;
			$n3=$numeroMagico;
		}
		$aux = maximo($n1,$n2);
		$numeroMagico=-100000;
		return maximo($aux,$n3);
	}

	function tabla($base,$limite){
		global $funcionesEjecutadas;
    $funcionesEjecutadas++;
		$tabla = [];
		if ($base <= $limite){
			$inicio = $base;
			$fin = $limite;
		} else {
			$inicio = $limite;
			$fin = $base;
		}

		for ($i= $inicio; $i <= $fin ; $i++) {
			$tabla[] = $i;
		}

		return $tabla;
	}
?>
