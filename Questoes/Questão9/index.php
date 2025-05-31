<!DOCTYPE html>
<html>
<head>
	<title>Notas</title>
		<style>
		h1{
			color:#363636;
		}
		body{
			display:flex;
			justify-content:center;
			align-items:center;
			height:100vh;
			background-color:#363636;
		}
		.box{
			background:#A9A9A9;
			padding:150px;
			width:300px;
			text-align:center;
			border:2px solid black;
			border-radius:20px;
		}
		button{
			background-color:#191970;
			color:white;
			cursor:pointer;
		}
		button:hover{
			background-color:#6A5ACD;
		}
	</style>
</head>
<body>
	<div class="box">
		<h1>Notas</h1>
		<p>Digite as notas do aluno</p>
		<br><br>
		<form method="POST" action="index2.php">
			<label>Digite a primeira nota:</label>
			<input type="float" name="n1" required>
			<br>
			<label>Digite a segunda nota:</label>
			<input type="float" name="n2" required>
			<br>
			<label>Digite a terceira nota:</label>
			<input type="float" name="n3" required>
			<br><br>
			<button type="submit">Enviar</button>
		</form>
	</div>	
</body>
</html>