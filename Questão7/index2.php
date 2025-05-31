<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$nome = $_POST['nome'];
	$ano = $_POST['ano'];
	$ano_atual = date("Y");

	$idade = $ano_atual - $ano;
	echo ("A pessoa cujo o nome é $nome, possui $idade anos");
}
