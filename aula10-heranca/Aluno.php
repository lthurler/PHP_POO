<?php

require_once 'Pessoa.php';

class Aluno extends Pessoa
{
    private $matricula;
    private $curso;

    
    function cancelarMatricula()
    {
        $this->setMatricula('cancelada');
        echo 'Matricula cancelada!';
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
