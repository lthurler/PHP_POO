<?php

require_once 'Animal.php';


class Reptil extends Animal
{
    private $corEscama;


    function locomover()
    {
        echo '<p>Rastejando</p>';
    }

    function alimentar()
    {
        echo '<p>Comendo bichos</p>';
    }

    function emitirSom()
    {
        echo '<p>Som de réptil</p>';
    }


    public function getCorEscama()
    {
        return $this->corEscama;
    }

    public function setCorEscama($corEscama)
    {
        $this->corEscama = $corEscama;
        return $this;
    }
}
?>
