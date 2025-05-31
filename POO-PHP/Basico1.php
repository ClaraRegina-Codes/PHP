<?php
//função simples sem parâmetro e sem retorno
function teste(){
    echo"Olá, mundo<br>";
}
teste();

//função com parâmetro
function bemVindo($nome){
    echo"Olá, $nome<br>";
}
bemVindo("José"); 
bemVindo("Maria");

function multi($num1, $num2){
    return $num1 *$num2;
}
$resultado =multi(5,2); //o primeiro parâmetro da função multi, $num1, recebe como argumento o valor 5, enquanto $num2 recebe o valor 2
echo "$resultado"; 

/*  COMENTÁRIOS: 
- quando se tem puro PHP não é necessário fechar o código com //>?
- quando tem o PHP em dentro de um arquivo com HTML é necessário fechar o PHP

atributo são características de um objeto
métodos são ações que o objeto pode realizar
classe é algo que descreve de maneira geral, uma categoria. 

Exemplo: 
objeto cleomar da classe Pessoa
atributos: nome, idade, corDeCabelo e etc
métodos: falar, andar e etc (ações que a pessoa faz)

*/