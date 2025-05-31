<?php
include 'conexao.php';
 
if($_SERVER["REQUEST_METHOD"]=="POST"){
	$nomeLivro=trim($_POST['nomeLivro']);
	$isbn=trim($_POST['isbn']);
	$autor=trim($_POST['autor']);
	$ano_publicacao=trim($_POST['ano_publicacao']);
	$editora=trim($_POST['editora']);

	$cadastro=$conn->prepare("INSERT INTO livro(nome, isbn, editora, ano_publicacao, autor) VALUES (?,?,?,?,?)");
	$cadastro-> bind_param("sisis", $nomeLivro, $isbn, $editora, $ano_publicacao, $autor);
	if($cadastro->execute()){
		echo"cadastro realizado com sucesso";
	}else{
		echo"falha ao cadastrar".$cadastro->erro;
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
<button class="botao" ><a href="cadastroAutor.html">Cadastrar Autores</a></button>
<br><br>
<button class="botao" ><a href="catalogo.php">Catálogo</a></button>
