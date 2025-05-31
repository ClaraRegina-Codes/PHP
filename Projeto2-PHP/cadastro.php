<?php
include 'conexao.php';

	if ($_SERVER["REQUEST_METHOD"]=="POST"){
		//capturando dados do formulário 
		$cpf=trim($_POST['cpf']); //trim serve pra quê?
		$nome=trim($_POST['nome']);
		$username=trim($_POST['username']);
		$password=trim($_POST['password']);
		$email=trim($_POST['email']);

		//criptografar a senha: 
		$senha_hash = password_hash($password, PASSWORD_DEFAULT); //variável recebe resultado da função password_hash com os parâmetros: variável que recebeu o valor digitado no campo input e PASSWORD_DEFAULT

		//preparar a consulta SQL para inserir os dados
		//os valores serão ? isso significa que não foi inserido nada ainda
		$cadastro =$conn->prepare("INSERT INTO aluno (nome, cpf, username, password, email) VALUES (?,?,?,?,?)");
		//cria uma variável que recebe o atributo do objeto mysqli com os parâmetros inserindo valores em campos de uma determinada tabela


		$cadastro->bind_param("sssss", $nome, $cpf, $username, $senha_hash, $email);
		//cadastro acessa o atributo bind_param com os parâmetros ("tipoDeVariavel", campos)
		//são 5 s pois tem 5 campos do tipo string
		//usa a senha_hash,pois ela possui a senha criptografada

		//
		if($cadastro->execute()){
			echo"cadastro realizado com sucesso";
		}else{
			echo"erro ao cadastro usuário".$cadastro->erro;
		}

		$cadastro->close();
	}
	$conn->close();
?>
<h2><a href="login.html">Página de login</a></h2>
<h2><a href="cadastro.html">Voltar ao cadastro</a></h2>
