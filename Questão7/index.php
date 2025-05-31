<!DOCTYPE html>
<html>
<head>
	<title>Idade</title>
	<style>
			h1{
			color:#FFB6C1;
			text-align: center;
		}
		body{
			display:flex;
			justify-content:center;
			align-items:center;
			height:100vh;
			background-color:#FFB6C1;
		}
		.box{
			background:	#CD5C5C;
			padding:150px;
			width:300px;
			border:2px solid black;
			border-radius:20px;
		}
		button{
			background-color:#B22222;
			color:white;
			cursor:pointer;
		}
		button:hover{
			background-color:#FA8072;
			color:white;
		}
	</style>
</head>
<body>
	<div class="box">
		<h1>Descubra a idade</h1>
		<form method="POST" action="index2.php">
			<label>Digite o nome: </label>
			<input type="text" name="nome" required>
			<br>
			<label>Digite o ano de nascimento: </label>
			<input type="number" name="ano" required>
			<br><br>
			<button type="submit">Enviar</button>
		</form>
	</div>
</body>
</html>