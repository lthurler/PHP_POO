<?php

require_once 'Aluno.php';

class Bolsista extends Aluno
{
    private $bolsa;


    function pagarMensalidade()
    {
        echo "<p><strong>{$this->getNome()}</strong> é bolsista, paga com desconto.<br><br>";
    }

    function renovarBolsa()
    {
        echo "<p>Bolsa renovada</p>";
    }

     
    public function getBolsa()
    {
        return $this->bolsa;
    }

    public function setBolsa($bolsa)
    {
        $this->bolsa = $bolsa;
        return $this;
    }
}
?>
