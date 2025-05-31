<?php
include 'conexao.php';
include 'proteger.php';

	$sql ="SELECT * FROM aluno";
	$resultado = $conn-> query($sql);
	?>
	<!DOCTYPE html>
	<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<title>Lista de dados</title>
		<link rel="stylesheet" type="text/css" href="css_banco de dados.css">
	</head>
	<body>
		<p><strong>Olá, <?=htmlspecialchars($_SESSION['nome'])?>!</strong></p>
		<h2>Gerenciar usuários</h2>
		<table>
			<tr>
				<th>ID</th>
				<th>Nome</th>
				<th>CPF</th>
				<th>Username</th>
				<th>Email</th>
				<th>Ações</th>
			</tr>
			<?php while($row =$resultado->fetch_assoc()):?> 
			<tr>
				<td><?=$row['id']?></td> 
				<td><?=$row['nome']?></td> 
				<td><?=$row['cpf']?></td>
				<td><?=$row['username']?></td>
				<td><?=$row['email']?></td>
				<td>
					<a href="editar.php?id=<?=$row['id'] ?>">Editar</a>
					<a href="excluir.php?id=<?=$row['id'] ?>">Excluir</a>
				</td>
			<tr>
		<?php endwhile; ?>
		</table>
		<br>
		<button onclick="window.location.href='cadastro.html'">Cadastrar usuários</button>
		<br><br>
		<button onclick="window.location.href='logout.php'">Sair</button>
	</body>
</html>
<?php 
$conn->close();


