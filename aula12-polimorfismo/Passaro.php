<?php

require_once 'Animal.php';


class Passaro extends Animal
{
    private $corPena;


    function locomover()
    {
        echo '<p>Voando</p>';
    }

    function alimentar()
    {
        echo '<p>Comendo frutas</p>';
    }

    function emitirSom()
    {
        echo '<p>Som de ave</p>';
    }

    function fazerNinho()
    {
        echo '<p>Construiu um ninho</p>';
    }

     
    public function getCorPena()
    {
        return $this->corPena;
    }
 
    public function setCorPena($corPena)
    {
        $this->corPena = $corPena;
        return $this;
    }
}
?>
