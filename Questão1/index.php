<!DOCTYPE html>
<html>
<head>
	<title>Formulários</title>

	<style>
		h1{
			color:black;
			align-items:center;
		}
		body{
			display:flex;
			justify-content:center;
			align-items:center;
			height:100vh;
			background-color:#708090;		
		}
		.box{
			background:#B0C4DE;
			padding:150px;
			width:300px;
			border:2px solid black;
			border-radius:20px;
		}
		button{
			background-color:#4682B4;
			color:white;
			cursor:pointer;
		}
		button:hover{
			background-color:#87CEEB;
		}
	</style>
</head>
<body>
	<div class="box">
		<h1>Formulário</h1>
		<p>Digite suas informações</p>
		<form method="POST" action="index2.php">
			<label>Nome: </label>
			<input type="text" name="campoNome" required>
			<br>
			<label>Email: </label>
			<input type="text" name="campoEmail" required>
			<br>
			<label>Comentário: </label>
			<input type="text" name="campoComentario" required>
			<br><br>
			<button type="submit">Enviar</button>
		</form>
	</div>
</body>
</html>