<?php 
require_once 'Pessoa.php'; //inclui o arquivo Pessoa.php
class programador extends Pessoa{ //a classe programador estende a classe Pessoa
    protected $linguagem;

    //MÉTODO SET
    public function setLinguagem($novoLinguagem){
        $this->linguagem=$novoLinguagem; //this se refere a variável $linguagem recebendo o valor da variável $novoLinguagem
    }

    //MÉTODO GET
    public function getLinguagem(){
        return $this->linguagem;  //O método get retorna o valor que this está apontando
    }

    public function __construct($newNome, $newLinguagem){
        $this->nome=$newNome;
        $this->linguagem=$newLinguagem;
    }
}
?>