<?php
	$server ='localhost'; 
	$user='root';
	$password ='';
	$bd = 'livraria'; 

	$conn = new mysqli($server, $user, $password, $bd);

	if($conn-> connect_error){ 
		die("falha na conexão: ".$conn-> connect_error);
	}
?>
