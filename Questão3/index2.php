<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$n = $_POST['numero'];
	if ($n >= 20) {
		$i = 20;
		while ($i <= $n) {
			echo ("$i <br>");
			$i++;
		}
	} else {
		echo ("o valor $n é menor que 20");
	}
}
