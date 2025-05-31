<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$produto = $_POST['produto'];
	$estabelecimento1 = $_POST['e1'];
	$valor1 = $_POST['valor1'];
	$estabelecimento2 = $_POST['e2'];
	$valor2 = $_POST['valor2'];
	$estabelecimento3 = $_POST['e3'];
	$valor3 = $_POST['valor3'];

	if ($valor1 < $valor2 && $valor1 < $valor3) {
		echo ("o $estabelecimento1 é mais barato, oferece o produto $produto por $valor1");
	} elseif ($valor2 < $valor1 && $valor2 < $valor3) {
		echo ("o $estabelecimento2 é mais barato, oferece o produto $produto por $valor2");
	} else {
		echo ("o $estabelecimento3 é mais barato, oferece o produto $produto por $valor3");
	}
}
