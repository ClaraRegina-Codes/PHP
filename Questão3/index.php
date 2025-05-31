<!DOCTYPE html>
<html>
<head>
	<title>Contagem até 20</title>
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
			background-color:#FA8072;
		}
		.box{
			background:#FAEBD7;
			padding:150px;
			width:300px;
			border:2px solid black;
			border-radius:20px;
		}
		button{
			background-color:#FFA07A;
			cursor:pointer;
		}
		button:hover{
			background-color:#FF6347;
		}
	</style>
</head>
<body>
	<div class="box">
		<h1>Contagem até 20</h1>
		<p>Digite um valor, se o valor for acima de 20 ele conta de 20 até o valor digitado</p>
		<form method="POST" action="index2.php">
			<label>Digite um número: </label>
			<input type="number" name="numero" required>
			<button type="submit">Enviar</button>
		</form>
	</div>
</body>
</html>