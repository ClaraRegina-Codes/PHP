<?php
class Autor
{
    private $nome;
    private $anoNascimento;
    private $pais;
    private $estado;

    public function setNome($nome)
    {
        return $this->nome = $nome;
    }
    public function getNome()
    {
        return $this->nome;
    }
    public function setAnoNascimento($anoNascimento)
    {
        return $this->anoNascimento = $anoNascimento;
    }
    public function getAnoNascimento()
    {
        return $this->anoNascimento;
    }
    public function setPais($pais)
    {
        return $this->pais = $pais;
    }
    public function getPais()
    {
        return $this->pais;
    }
    public function setEstado($estado)
    {
        return $this->estado = $estado;
    }
    public function getEstado()
    {
        return $this->estado;
    }
    public function exibirAutor()
    {
        echo "Autor: {$this->nome}<br>";
        echo "Ano de nascimento: {$this->anoNascimento}<br>";
        echo "Pais de origem: {$this->pais}<br>";
        echo "Estado de origem: {$this->estado}<br>";
    }
}
