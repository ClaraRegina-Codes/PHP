<?php
	if($_SERVER["REQUEST_METHOD"]=="POST"){
		$nome = $_POST['campoNome'];
		$email = $_POST['campoEmail'];
		$comentario=$_POST['campoComentario'];

		echo("Olá, $nome, seu email é $email <br> agradecemos pelo seu comentário: $comentario");
	}
?>