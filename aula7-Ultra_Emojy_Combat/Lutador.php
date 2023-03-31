<?php

class Lutador 
{
    private $nome;
    private $nacionalidade;
    private $idade;
    private $altura;
    private $peso;
    private $categoria;
    private $vitorias;
    private $derrotas;
    private $empates;


    public function getNome()
    {
        return $this->nome;
    }
    
    public function setNome($nome)
    {
        $this->nome = $nome;
        return $this;
    }
     
    public function getNacionalidade()
    {
        return $this->nacionalidade;
    }
    
    public function setNacionalidade($nacionalidade)
    {
        $this->nacionalidade = $nacionalidade;
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
   
    public function getAltura()
    {
        return $this->altura;
    }
    
    public function setAltura($altura)
    {
        $this->altura = $altura;
        return $this;
    }
     
    public function getPeso()
    {
        return $this->peso;
    }
    
    public function setPeso($peso)
    {
        $this->peso = $peso;
        return $this;
    }
     
    public function getCategoria()
    {
        return $this->categoria;
    }
     
    public function setCategoria($categoria)
    {
       if ($this->peso < 52.2)
       {
        $this->categoria = "Inválido";

       } elseif ($this->peso <= 70.3)
       {
        $this->categoria = "Leve";

       } elseif ($this->peso <= 83.9)
       {
        $this->categoria = "Médio";

       } elseif ($this->peso <= 120.2)
       {
        $this->categoria = "Pesado";

       } else
       {
        $this->categoria = "Inválido";
       }
    }
     
    public function getVitorias()
    {
        return $this->vitorias;
    }
    
    public function setVitorias($vitorias)
    {
        $this->vitorias = $vitorias;
        return $this;
    }

    public function getDerrotas()
    {
        return $this->derrotas;
    }

    public function setDerrotas($derrotas)
    {
        $this->derrotas = $derrotas;
        return $this;
    }
    
    public function getEmpates()
    {
        return $this->empates;
    }
    
    public function setEmpates($empates)
    {
        $this->empates = $empates;
        return $this;
    }


    function apresentar()
    {
        echo "<p>---------------------------</p>";
        echo "<p>CHEGOU A HORA!! O lutador " . $this->getNome();
        echo "veio diretamente de " . $this->getNacionalidade();
        echo "tem " . $this->getIdade() . "anos e pesa " . $this->getPeso() ."kg";
        echo "<br>Ele tem " . $this->getVitorias() . " vitórias";
        echo $this->getDerrotas() . " derrotas e " . $this->getEmpates() . " empates</p>";
    }

    function status()
    {
        echo "<p>----------------------------</p>";
        echo "<p>" . $this->getNome() . " é um peso " . $this->getCategoria();
        echo " e já ganhou " . $this->getVitorias() . " vezes,";
        echo " perdeu " . $this->getDerrotas() . " vezes e ";
        echo " empatou " . $this->getEmpates() . " vezes</p>";    
    }
    
    function ganharLuta()
    {
        $this->setVitorias($this->getVitorias() + 1);
    }

    function perderLuta()
    {
        $this->setDerrotas($this->getDerrotas() + 1);
    }

    function empatarLuta()
    {
        $this->setEmpates($this->getEmpates() + 1);
    }    
}
?>