<?php

require_once 'Animal.php';


class Mamifero extends Animal
{
    private $corPelo;


    function locomover()
    {
        echo '<p>Correndo</P>';
    }

    function alimentar()
    {
        echo '<p>Mamando</p>';
    }

    function emitirSom()
    {
        echo '<p>Som de mamífero</p>';
    }
    
 
    public function getCorPelo()
    {
        return $this->corPelo;
    }

    public function setCorPelo($corPelo)
    {
        $this->corPelo = $corPelo;
        return $this;
    }
}
?>
