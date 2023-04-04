 <?php
 
 require_once 'Video.php';
 require_once 'Gafanhoto.php';


 class Visualizacao 
 {
    private $espectador;
    private $filme;

    
    function __construct($espectador,$filme)
    {
        $this->setEspectador($espectador);
        $this->setFilme($filme);
        $this->filme->setViews($this->filme->getViews() + 1);
        $this->espectador->setTotalAssistido($this->espectador->getTotalAssistido() + 1);
    }

    function avaliacao()
    {
        $this->filme->setAvaliacao(5);
    } 

    function avaliacaoNota($nota)
    {
        $this->filme->setAvaliacao($nota);
    }

    function avaliacaoPorcentagem($porcentagem)
    {
        $nova = 0;

        if ($porcentagem <= 20)
        {
            $nova = 3;

        } elseif ($porcentagem <= 50)
        {
            $nova = 5;

        } elseif ($porcentagem <= 90)
        {
            $nova = 8;

        } else 
        {
            $nova = 10;
        }
        $this->filme->setAvaliacao($nova);
    }

    public function getEspectador()
    {
        return $this->espectador;
    }
 
    public function setEspectador($espectador)
    {
        $this->espectador = $espectador;
        return $this;
    }
 
    public function getFilme()
    {
        return $this->filme;
    }
 
    public function setFilme($filme)
    {
        $this->filme = $filme;
        return $this;
    }
 }
 ?>
