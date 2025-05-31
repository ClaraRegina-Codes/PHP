<?php
session_start(); //inicia a sessão e identifica o usuário que está logando
include 'conexao.php'; //inclui o que está no arquivo conexao.php
	if($_SERVER["REQUEST_METHOD"]=="POST"){
		$user = trim($_POST['username']);
		$pass = trim($_POST['password']);
//preparar o banco de dados para a consulta sql - forma segura	
		//verifica se o usuário existe
		//seleciona id, nome e password da tabela aluno, onde username receberá um valor (ainda não definido)

		$consulta =$conn->prepare("SELECT id, nome, password FROM aluno WHERE username=?");
		$consulta->bind_param("s", $user); //os parâmetros ("tipoDaVariavel, variavel")
		//o tipo da variável será siglas: "s" - string, "i" - int, "f" - float, "b" - booleano
		$consulta->execute();
		$resultado =$consulta->get_result(); //get_results é um objeto que vai trazer todos os valores 

		//verificar se encontrou o usuário 
		if($resultado->num_rows >0){
			$row =$resultado->fetch_assoc();
			$nome=$row['nome'];

			//seção no PHP dura 24 minutos por padrão, após isso, aparece que a seção expirou
			//criptografar senhas
			$senha_hash = $row['password']; //pega a senha do banco de dados
			if(password_verify($pass, $senha_hash)){ //compara a senha digitada com a senha do banco de dados
				//supervariável session
				$_SESSION['id'] =$row['id'];
				$_SESSION['nome']=$nome;
				header("location: lista.php");
				exit;
			}else{
				echo"<script>alert('Senha incorreta!');window.location.href='login.html';</script>";
			}	 
		}else{
			echo"<script>alert('Usuário não encontrado');window.location.href='login.html';</script>";
		}
		$consulta->close();
	}
$conn->close();
?>
