<?php
include 'conexao.php';
 
if($_SERVER["REQUEST_METHOD"]=="POST"){
	$nomeAutor=trim($_POST['nomeAutor']);
	$cpfAutor=trim($_POST['cpfAutor']);
	$anoNascimento=trim($_POST['anoNascimento']);
	$cidade=trim($_POST['cidade']);
	$estado=trim($_POST['estado']);

	$cadastro=$conn->prepare("INSERT INTO autor(nome, cpf, ano_nascimento, cidade, estado) VALUES (?,?,?,?,?)");
	$cadastro-> bind_param("ssiss", $nomeAutor, $cpfAutor, $anoNascimento, $cidade, $estado);
	if($cadastro->execute()){
		echo"cadastro realizado com sucesso";
	}else{
		echo"falha ao cadastrar".$cadastro->error;
	}
	$cadastro->close();
}
$conn->close();
?>

<br>
<head>
	<link rel="stylesheet" href="estilo.css">
</head>
<br><br>
<button class="botao"><a href="cadastroLivro1.php">Cadastrar Livros</a></button>
<br><br>
<button class="botao"><a href="catalogo.php">Catálogo</a></button>
