<?php
//conectar ao banco de dados
include 'conexao.php';

//recebendo dados do ID via URL 
if(isset($_GET['id'])){
	$id = $_GET['id'];

//executando o comando DELETE no banco de dados
//
$sql ="DELETE FROM aluno WHERE id=$id";


//comparação com == o programa entende que "1" pode ser igual 1
//Possuem o mesmo valor, porém são tipos de dados diferentes
// === comparação mais precisa, diferencia os tipos de dados também

if($conn->query($sql)===TRUE){
	echo "<script>alert('usuario excluído com sucesso'); window.location.href='lista.php';</script>";
	}else{
	echo"erro ao excluir usuario: ".$conn->error;

	}
}else{
	echo "ID do usuário não cadastro";
}
$conn->close();
?>