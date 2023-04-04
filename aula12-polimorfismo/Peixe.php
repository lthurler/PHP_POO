<?php

require_once 'Animal.php';


class Peixe extends Animal
{
    private $corEscama;


    function locomover()
    {
        echo '<p>Nadando</p>';
    }

    function alimentar()
    {
        echo '<p>Comendo coisas na agua</p>';
    }

    function emitirSom()
    {
        echo '<p>Peixe não faz som</p>';
    }

    function soltarBolha()
    {
        echo '<p>Soltou bolha</p>';
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
