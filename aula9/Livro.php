<?php

require_once 'Pessoa.php';
require_once 'interfacePublicacao.php';

class Livro implements interfacePublicacao
{
    private $titulo;
    private $autor;
    private $totalPagina;
    private $paginaAtual;
    private $aberto;
    private $leitor;
    

    public function __construct($titulo, $autor, $totalPagina, $leitor)
    {
        $this->setTitulo($titulo);
        $this->setAutor($autor);
        $this->setTotalpagina($totalPagina);
        $this->setAberto(false);
        $this->setPaginaAtual(0);
        $this->setLeitor($leitor);
    }

    
    function abrir()
    {
        $this->setAberto(true);
        echo 'Aberto';
    }

    function fechar()
    {
        $this->setAberto(false);
        echo 'fechado';
    }

    function folhear($pagina)
    {
        if ($pagina > $this->getTotalpagina())
        {
            $this->setPaginaAtual(0);

        } else
        {
            $this->setPaginaAtual($pagina);    
        }
    }

    function avancarPagina() 
    {
        $this->setPaginaAtual($this->getPaginaAtual() +1);        
    }

    function voltarPagina()
    {
        $this->setPaginaAtual($this->getPaginaAtual() -1);        
    }

    function detalhes()
    {
        echo 'Livro ' . $this->titulo . " escrito por " . $this->autor;
        echo '<br> Páginas: ' . $this->totalpagina;
        echo '<br> Sendo lido por ' . $this->leitor->getNome();
    }
    

    public function getTitulo()
    {
        return $this->titulo;
    }

    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;
        return $this;
    }

    public function getAutor()
    {
        return $this->autor;
    }

    public function setAutor($autor)
    {
        $this->autor = $autor;
        return $this;
    }

    public function getTotalpagina()
    {
        return $this->totalpagina;
    }

    
    public function setTotalpagina($totalpagina)
    {
        $this->totalpagina = $totalpagina;
        return $this;
    }

    public function getPaginaAtual()
    {
        return $this->paginaAtual;
    }

   
    public function setPaginaAtual($paginaAtual)
    {
        $this->paginaAtual = $paginaAtual;
        return $this;
    }

    public function getAberto()
    {
        return $this->aberto;
    }

    public function setAberto($aberto)
    {
        $this->aberto = $aberto;
        return $this;
    }

    public function getLeitor()
    {
        return $this->leitor;
    }
 
    public function setLeitor($leitor)
    {
        $this->leitor = $leitor;
        return $this;
    }
}