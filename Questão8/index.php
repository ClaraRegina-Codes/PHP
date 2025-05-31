<!DOCTYPE html>
<html>
<head>
	<title>Comparação de preços</title>
	<style>
		h1{
			color:#E6E6FA;
			text-align:center;
		}
		body{
			display:flex;
			justify-content:center;
			align-items:center;
			height:100vh;
			background-color:#E6E6FA;
		}
		.box{
			background:#9370DB;
			padding:150px;
			width:300px;
			border:2px solid black;
			border-radius:20px;
		}
		button{
			background-color:#FFF0F5;
			color:black;
			cursor:pointer;
		}
		button:hover{
			background-color:#D8BFD8;
			color:black;
		}
	</style>
</head>
<body>
	<div class="box">
		<h1>Compare os preços</h1>
		<p>Digite o nome de três estabelecimentos que oferecem o mesmo produto e compare os preços</p>
		<br><br>
		<form method="POST" action="index2.php">
			<label>Produto</label>
			<input type="text" name="produto" required>
			<br>
			<label>Estabelecimento 1</label>
			<input type="text" name="e1" required>
			<label>Valor do produto: </label>
			<input type="float" name="valor1" required>
			<br>
			<label>Estabelecimento 2</label>
			<input type="text" name="e2" required>
			<label>Valor do produto: </label>
			<input type="float" name="valor2" required>
			<br>
			<label>Estabelecimento 3</label>
			<input type="text" name="e3" required>
			<label>Valor do produto: </label>
			<input type="float" name="valor3" required>
			<br><br>
			<button type="submit">Comparar</button>
		</form>
	</div>
</body>
</html>