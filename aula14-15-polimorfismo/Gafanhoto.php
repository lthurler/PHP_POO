<?php

require_once 'Pessoa.php';


class Gafanhoto extends Pessoa
{
    private $login;
    private $totalAssistido;

    function __construct($nome,$idade,$sexo,$login)
    {
        $this->setNome($nome);
        $this->setIdade($idade);
        $this->setSexo($sexo);
        $this->setLogin($login);
        $this->setExperiencia(0);
        $this->setTotalAssistido(0);
    }


    function ganharExperiencia()
    {
        $this->setExperiencia($this->getExperiencia() +1);
    }

    function viuMaisUm()
    {
        $this->setTotalAssistido($this->getExperiencia() +1);
        $this->ganharExperiencia();
    }


    public function getLogin()
    {
        return $this->login;
    }
 
    public function setLogin($login)
    {
        $this->login = $login;
        return $this;
    }
 
    public function getTotalAssistido()
    {
        return $this->totalAssistido;
    }
 
    public function setTotalAssistido($totalAssistido)
    {
        $this->totalAssistido = $totalAssistido;
        return $this;
    }
}
?>
