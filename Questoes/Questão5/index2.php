<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$n = $_POST['numero'];
	$soma = 0;
	$cont = 1;
	while ($cont <= $n) {
		$soma += $cont;
		$cont++;
	}
	echo ("soma: $soma");
}
