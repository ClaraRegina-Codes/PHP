<?php
include 'conexao.php';
$sql = "SELECT * FROM livro";
$sql2 = "SELECT * FROM autor";
$resultado = $conn-> query($sql);
$resultado2 = $conn-> query($sql2);



?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Trirong">
	<link rel="stylesheet" href="estilo.css">
	<meta charset="UTF-8">
	<title>Catálogo</title>
</head>
<body>
	<h1> Informações dos livros cadastrados</h1>
	<table>
		<tr>
			<th>Nome</th>
			<th>ISBN</th>
			<th>Autor</th>
			<th>Editora</th>
			<th>Ano de publicação</th>
		<tr>
			<?php while($row=$resultado->fetch_assoc()):?>
			<td><?=$row['nome']?></td>
			<td><?=$row['isbn']?></td>
			<td><?=$row['autor']?></td>
			<td><?=$row['editora']?></td>
			<td><?=$row['ano_publicacao']?></td>
		<tr>

		<?php endwhile; ?>
		</table>
		
		<br>
		<hr><hr>

		<h1> Informações dos autores cadastrados</h1>
		<table>
		<tr>
			<th>Nome</th>
			<th>CPF</th>
			<th>Ano nascimento</th>
			<th>Cidade</th>
			<th>Estado</th>
		<tr>
			<?php while($row=$resultado2->fetch_assoc()):?>
			<td><?=$row['nome']?></td>
			<td><?=$row['cpf']?></td>
			<td><?=$row['ano_nascimento']?></td>
			<td><?=$row['cidade']?></td>
			<td><?=$row['estado']?></td>
		<tr>

		<?php endwhile; ?>
		</table>

		<br><br>
		<div>
			<button class="botao" onclick="window.location.href='cadastroAutor.html'">Cadastrar autores</button>
			<button class="botao" onclick="window.location.href='cadastroLivro1.php'">Cadastrar livros</button>
		</div>
</body>
</html>