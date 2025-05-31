<?php

if(!isset($_SESSION)){ //caso a sessão esteja desligada, ligue a sessão
	session_start();
}
	session_destroy(); //caso ela não esteja desligada, destroi a sessão e volta para login.html
	header("location:login.html");
	exit;
?>