<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$n = $_POST['numero'];
	if ($n % 2 == 0) {
		echo ("o número $n é par");
	} else {
		echo ("o número $n é ímpar");
	}
}
