<!DOCTYPE html>
<html>
<head>
	<title>Calculadora</title>
	<style>
		h1{
			color:black;
			text-align:center;
		}
		body{
			display:flex;
			justify-content:center;
			align-items:center;
			height:100vh;
			background-color:#FFFACD;
		}
		.box{
			background:#F5F5DC;
			padding:150px;
			width:300px;
			border:2px solid black;
			border-radius:20px;
		}
		button{
			background-color:#FFFACD;
			cursor:pointer;
		}
		button:hover{
			background-color:#FFD700;
		}
	</style>
</head>
<body>
	<div class="box">
		<h1>Calculadora</h1>
		<form method="POST" action="index2.php">
			<br><br>
			<label>Número 1: </label>
			<input type="number" name="num1" required>
			<br>
			<label>Número 2: </label>
			<input type="number" name="num2" required>
			<br>
			<label>Escolha: +, -, x ou / </label>
			<input type="text" name="sinal" required>
			<br><br>
			<button type="submit">enviar</button>
		</form>
	</div>
</body>
</html>