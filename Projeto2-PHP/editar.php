<?php
//conectar com o banco de dados
$host="localhost";
$user="root";
$password="";
$nomedb="escola_tecnica";

//criando a conexão
$conn=new mysqli($host, $user, $password,$nomedb);
if($conn->connect_error){
	die("erro ao conectar".$conn->connect_error);
}
//verificação dos valores reecebidos da lista.php
if(isset($_GET['id'])){
	$id=$_GET['id'];

//busca os valores no banco de dados
$sql = "SELECT * FROM aluno WHERE id=$id";
$resultado = $conn->query($sql);

//testar se os valores foram encontrados
	if($resultado->num_rows >0){
		$usuario =$resultado->fetch_assoc();
	}else{
		echo"usuário não cadastrado";
		exit;
	}
	}else{
	echo"ID inexistente";
	exit;
}
if($_SERVER["REQUEST_METHOD"]=="POST"){
	$nome = $_POST['nome'];
	$cpf= $_POST['cpf'];
	$username=$_POST['username'];
	$email=$_POST['email'];

	$sql ="UPDATE aluno SET nome='$nome', cpf='$cpf', username='$username', email='$email' WHERE id=$id";

	if($conn->query($sql)===TRUE){
		echo"<script>alert('Dados atualizados com sucesso!');window.location.href='lista.php'</script>";
		exit;
	}else{
		echo"erro ao atualizar: ".conn->erro;
	}
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Editar usuários</title>
</head>
<body>
<h2>Editar usuários</h2>
	<form method="POST">
		nome:<br><input type="text" name="nome" value="<?= $usuario['nome']?>"><br><br>
		cpf: <br><input type="text" name="cpf" value="<?= $usuario['cpf']?>"><br><br>
		username:<br><input type="text" name="username" value="<?= $usuario['username']?>"><br><br>
		email: <br><input type="text" name="email" value="<?= $usuario['email']?>"><br><br>
		<input type="submit" value="Salvar alterações">
	</form>
</body>
</html>
