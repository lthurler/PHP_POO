<?php

class Pessoa
{
    private $nome;
    private $idade;
    private $sexo;

    public function __construct($nome, $idade, $sexo)
    {
        $this->setNome($nome);
        $this->setIdade($idade);
        $this->setSexo($sexo);
    }

    public function fazerAniversario()
    {
        $this->setIdade($this->getIdade() + 1);
    }
     
    public function getNome()
    {
        return $this->nome;
    }
 
    public function setNome($nome)
    {
        $this->nome = $nome;
        return $this;
    }
 
    public function getIdade()
    {
        return $this->idade;
    }

    public function setIdade($idade)
    {
        $this->idade = $idade;
        return $this;
    }

    public function getSexo()
    {
        return $this->sexo;
    }

    public function setSexo($sexo)
    {
        $this->sexo = $sexo;
        return $this;
    }
}