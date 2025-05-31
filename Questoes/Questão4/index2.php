<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$n1 = $_POST['n1'];
	$n2 = $_POST['n2'];
	$n3 = $_POST['n3'];
	$aluno = $_POST['aluno'];

	$media = (($n1 + $n2 + $n3) / 3);
	if ($media >= 7) {
		echo (" O(A) aluno(a), $aluno, está aprovado");
	} elseif ($media < 7 && $media > 5) {
		echo (" O(A) aluno(a), $aluno, está de recuperação");
	} else {
		echo (" O(A) aluno(a), $aluno, está reprovado");
	}

	echo ("<br> O(A) aluno(a), $aluno, está com média " . number_format($media, 2));
}
