<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$n1 = $_POST['num1'];
	$n2 = $_POST['num2'];
	$sinal = $_POST['sinal'];

	switch ($sinal) {
		case "-":
			$resultado = ($n1 - $n2);
			echo ("$n1 - $n2 = $resultado");
			break;
		case "+":
			$resultado = ($n1 + $n2);
			echo ("$n1 + $n2 = $resultado");
			break;
		case "x":
			$resultado = ($n1 * $n2);
			echo ("$n1 x $n2 = $resultado");
			break;
		case "/":
			$resultado = ($n1 / $n2);
			echo ("$n1 / $n2 = $resultado");
			break;
		default:
			echo ("opção inválida");
	}
}
