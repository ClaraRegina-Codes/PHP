<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Pessoa</title>
</head>

<body>
    <?php
    //inclui o arquivo Pessoa.php, onde está a classe Pessoa
    require_once 'Pessoa.php';
    $pessoa1 = new Pessoa; // criação de um objeto chamado Pessoa1 da classe Pessoa 
    $pessoa1->setNome("Clara");  //o objeto pessoa1 chama o método set e atribui o valor Clara
    echo "Nome: " . $pessoa1->getNome() . "<br>"; // a função get retorna o nome atribuido ao objeto Pessoa1

    require_once 'Programador.php';
    $pessoa1 = new Programador("Clara", "PHP");
    echo "Nome: " . $pessoa1->getNome() . "<br>";
    echo "Linguagem de programação: " . $pessoa1->getLinguagem();

    /*  CASO A VARIÁVEL ESTEJA PÚBLICA E SEM OS MÉTODOS SET E GET
      $pessoa1->nome="Clara"; //o atributo nome do objeto pessoa1 recebe o valor Clara
      $pessoa1->falarNome(); //o objeto está chamando o método falarNome() da classe Pessoa
    */
    ?>
</body>

</html>