<?php
class Livro
{
    //ModificadorAcesso $variavel;
    private $titulo;
    private $autor;
    private $isbn;
    private $editor;
    private $anoPublic;
    private $capa;
    private $disponivel = true; //variavel disponível começa com o valor verdadeiro

    //métodos getter e setter:
    public function getTitulo()
    {
        return $this->titulo;
    }
    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;
    }

    //---------------------------------------

    public function getAutor()
    {
        return $this->autor;
    }
    public function setAutor($autor)
    {
        $this->autor = $autor;
    }

    public function getIsbn()
    {
        return $this->isbn;
    }
    public function setIsbn($isbn)
    {
        $this->isbn = $isbn;
    }

    public function getEditor()
    {
        return $this->editor;
    }
    public function setEditor($editor)
    {
        $this->editor = $editor;
    }

    public function getAnoPublic()
    {
        return $this->anoPublic;
    }
    public function setAnoPublic($anoPublic)
    {
        $this->anoPublic = $anoPublic;
    }
    public function getCapa()
    {
        return $this->capa;
    }
    public function setCapa($capa)
    {
        $this->capa = $capa;
    }
    //-------------------------------------------
    //função emprestar verifica a disponibilidade do livro
    public function emprestar()
    {
        if ($this->disponivel) {
            $this->disponivel = false;
            echo "Livro emprestado<br>";
        } else {
            echo "Livro Indisponivel<br>";
        }
    }
    public function devolver()
    {
        $this->disponivel = true;
        echo "livro devolvido";
    }
    public function doar()
    {
        echo "livro '{$this->titulo}'doado<br>";
        $this->disponivel = false;
    }
    public function receberDoacao()
    {
        echo "Livro recebido'{$this->titulo}'recebido por doação"; //será apresentado o título em $this->titulo
        $this->disponivel = true;
    }
    public function exibirDetalhes()
    {
        echo "Título: {'$this->titulo'}<br>";
        echo "ISBN: {'$this->isbn'}<br>";
        if ($this->capa) {
            echo "Capa: <br><img src='{$this->capa}'all='capa do livro' style='max-width: 100px;'><br>";
            //caminho para a imagem salva em uma pasta e configurações da imagem
        }
        $this->autor->exibirAutor(); //chamando método da classe Autor, mesma pasta de projeto
    }
}
