<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$num = $_POST['numero'];

	echo ("Números pares até o $num <br>");
	for ($i = 1; $i <= $num; $i++) {
		if ($i % 2 == 0) {
			echo ("$i <br>");
		}
	}
	echo ("<br>Números ímpares até o $num <br>");
	for ($i = 1; $i <= $num; $i++) {
		if ($i % 2 != 0) {
			echo ("$i <br>");
		}
	}
}
