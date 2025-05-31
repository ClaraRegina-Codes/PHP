<?php 
include 'conexao.php';
$resultadoAutor =$conn->query("SELECT nome FROM autor"); 
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Cadastro - Livro</title>
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Trirong">
	<link rel="stylesheet" href="estilo.css">
</head>
<body>
	<h1> Cadastro de livros</h1>
	<br>
	<form method="POST" action="cadastroLivro.php>

		<label>Nome do livro</label>
		<br>
		<input type="text" name="nomeLivro" required>
		<br>

		<label>ISBN:</label>
		<br>
		<input type="number" name="isbn">
		<br>

		<label>Autor:</label>
		<br>
		<input list="autores" name="autor" required>
		<datalist id="autores">
			<?php 
			 if ($resultadoAutor) {
			 	if($resultadoAutor->num_rows>0){ //se existe algum autor
			 		while($row = $resultadoAutor->fetch_assoc()){ //verificação se o autor existe no banco de dados
			 	echo "<option value ='".htmlspecialchars($row['nome'], ENT_QUOTES,'UTF-8')."'>"; //apresenta informação de acordo 
			 		}
			 	}else{
			 		//caso não seja encontrado nenhum autor cadastrado com o que o usuário escreveu
			 		echo "<option value=''>Nenhum autor cadastrado</option>";
			 	}
			 }else{ //caso ocorra algum erro ao verificar se tem autores cadastrados
			 	echo "<option value=''>Erro ao consultar autores</option>";
			 }
			 ?>
		</datalist>
		<br>

		<label>Editora:</label>
		<br>
		<input type="text" name="editora">
		<br>

		<label>Ano de publicação:</label>
		<br>
		<input type="number" name="ano_publicacao">
		<br><br>

		<input class="botao" type="submit" value="cadastrar" submit>

	</form>

</body>
</html>