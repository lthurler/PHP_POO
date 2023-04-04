<?php

abstract class Pessoa
{
    protected $nome;
    protected $idade;
    protected $sexo;
    protected $experiencia;

    
    protected abstract function ganharExperiencia();


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
 
    public function getExperiencia()
    {
        return $this->experiencia;
    }
 
    public function setExperiencia($experiencia)
    {
        $this->experiencia = $experiencia;
        return $this;
    }
}
?>
