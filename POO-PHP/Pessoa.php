<?php

//criação de uma classe chamada Pessoa
class Pessoa{
    protected $nome; // modificadorDeAcesso $nomeVariavel;
    
    //caso a variável esteja privada, com acesso apenas dentro da própria classe

    //método set
    public function setNome($novoNome){ //função com modificador de acesso público, setVariavel com parâmetros da novaVariável
        $this->nome=$novoNome; //this se refere à variável nome recebendo o valor da variável $novoNome
    }

    //método get
    public function getNome(){
        return $this->nome;
    }

   /* function falarNome(){
        echo $this->nome; //this se refere ao objeto dele, dentro do objeto Pessoa, ele está apontando para o atributo nome
    } */
} 

/* MODIFICADOR DE ACESSO:
public - pode acessar por todo o projeto
private - só consegue acessar dentro da classe 
protected - pode acessar dentro da classe, em subclasses ou em classes do mesmo pacote
*/

