<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$num1 = $_POST['n1'];
	$num2 = $_POST['n2'];
	$num3 = $_POST['n3'];

	$mediaPonderada = ((($num1 * 1) + ($num2 * 2) + ($num3 * 2)) / 5);
	echo ("a média ponderada " . number_format($mediaPonderada, 2));

	if ($mediaPonderada >= 6) {
		echo ("<br>O aluno está aprovado!");
	} else {
		echo ("<br>O aluno está reprovado!");
	}
}
