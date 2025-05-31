<!DOCTYPE html>
<html>
<head>
	<title>Estado acadêmico</title>
	<style>
		h1{
			color:#4682B4;
			text-align:center;
		}
		body{
			display:flex;
			justify-content:center;
			align-items:center;
			height:100vh;
			background-color:#4682B4;
		}
		.box{
			background:#B0E0E6;
			padding:150px;
			width:300px;
			border:2px solid black;
			border-radius:20px;
		}
		button{
			background-color:#FF0000;
			color:white;
			cursor:pointer;
		}
		button:hover{
			background-color:#8B0000;
			color:white;
		}
	</style>
</head>
<body>
	<div class="box">
		<h1>Situação acadêmica do aluno: </h1>
		<p>Verifique se o aluno está aprovado, de recuperação ou reprovado</p>
		<form method="POST" action="index2.php">
			<label> digite o nome do aluno: </label>
			<input type="text" name="aluno" required>
			<br>
			<label> digite a primeira nota: </label>
			<input type="text" name="n1" required>
			<br>
			<label> digite a segunda nota: </label>
			<input type="text" name="n2" required>
			<br>
			<label> digite a terceira nota: </label>
			<input type="text" name="n3" required>
			<br><br>
			<button type="submit">enviar</button>
		</form>
	</div>
</body>
</html>