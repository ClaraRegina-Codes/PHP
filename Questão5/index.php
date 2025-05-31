<!DOCTYPE html>
<html>
<head>
	<title>Soma</title>
		<style>
		h1{
			color:#483D8B;
			text-align:center;
		}
		body{
			display:flex;
			justify-content:center;
			align-items:center;
			height:100vh;
			background-color:#483D8B;
		}
		.box{
			background:#E6E6FA;
			padding:150px;
			width:300px;
			border:2px solid black;
			border-radius:20px;
		}
		button{
			background-color:#48D1CC;
			cursor:pointer;
		}
		button:hover{
			background-color:#008080;
		}
	</style>
</head>
<body>
	<div class="box">
		<h1>Contagem</h1>
		<p>Digite um número e descubra a soma de todos os números de 1 até o número digitado</p>
		<form method="POST" action="index2.php">
			<label>Digite um número: </label>
			<input type="number" name="numero" required>
			<button type="submit">Enviar</button>
		</form>
	</div>
</body>
</html>