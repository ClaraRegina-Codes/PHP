<!DOCTYPE html>
<html>
<head>
	<title>Contagem - pares/ímpares</title>
	<style>
		h1{
			color:#2F4F4F;
			text-align:center;
		}
		body{
			display:flex;
			justify-content:center;
			align-items:center;
			height:100vh;
			background-color:#2F4F4F;
		}
		.box{
			background:#5F9EA0;
			padding:150px;
			width:300px;
			border:2px solid black;
			border-radius:20px;
		}
		button{
			background-color:#A52A2A;
			color:white;
			cursor:pointer;
		}
		button:hover{
			background-color:#FA8072;
		}
	</style>
</head>
<body>
	<div class="box">
		<h1>Contagem</h1>
	<p>Digite um número e descubra a contagem em pares e depois em ímpares até esse número</p>
		<form method="POST" action="index2.php">
			<label>Digite um número:</label><br>
			<input type="number" name="numero" required><br><br>
			<button type="submit">Enviar</button>
		</form>
	</div>
</body>
</html>