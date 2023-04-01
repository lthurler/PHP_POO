<?php

require_once 'Pessoa.php';

class Professor extends Pessoa
{
    private $expecialidade;
    private $salario;


    function receberAumento($aumento)
    {
        $this->setSalario($this->getSalario() + $aumento);
    }

 
    public function getExpecialidade()
    {
        return $this->expecialidade;
    }

    public function setExpecialidade($expecialidade)
    {
        $this->expecialidade = $expecialidade;
        return $this;
    }
 
    public function getSalario()
    {
        return $this->salario;
    }

    public function setSalario($salario)
    {
        $this->salario = $salario;
        return $this;
    }
}
?>
