<?php

require_once 'Pessoa.php';

class Aluno extends Pessoa
{
    private $matricula;
    private $curso;
    

    function pagarMensalidade()
    {
        echo "Pagando mensalidade do aluno <strong>{$this->getNome()}</strong><br><br>";
    }

   
    public function getMatricula()
    {
        return $this->matricula;
    }
 
    public function setMatricula($matricula)
    {
        $this->matricula = $matricula;

        return $this;
    }
 
    public function getCurso()
    {
        return $this->curso;
    }

    public function setCurso($curso)
    {
        $this->curso = $curso;

        return $this;
    }
} 

?>