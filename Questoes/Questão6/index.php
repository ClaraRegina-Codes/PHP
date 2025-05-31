<!DOCTYPE html>
<html>
<head>
	<title>Valor par ou ímpar</title>
		<style>
		h1{
			color:	#000000;
			text-align: center;
		}
		body{
			display:flex;
			justify-content:center;
			align-items:center;
			height:100vh;
			background-color:#DCDCDC;
		}
		.box{
			background:#4F4F4F;
			padding:150px;
			width:300px;
			border:2px solid black;
			border-radius:20px;
			color:white;
		}
		button{
			background-color:#A9A9A9;
			color:white;
			cursor:pointer;
		}
		button:hover{
			background-color:#000000;
			color:white;
		}
	</style>
</head>
<body>
	<div class="box">
		<h1>Verifique se o valor é ímpar ou par</h1>
		<form method="POST" action="index2.php">
			<label>Digite um número: </label>
			<input type="number" name="numero" required>
			<button type="submit">Enviar</button>
		</form>
	</div>
</body>
</html>