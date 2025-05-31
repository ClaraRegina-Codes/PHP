<?php
	if(!isset($_SESSION)){
		session_start();
	}

	//verifica se existe usuário logado
	if(!isset($_SESSION['id'])){
		header("location: login.html"); //caso ninguém esteja logado a pessoa é direcionada para a página de login
		exit; // encerrando dados para limpar a memória 
	}