<?php

require_once 'InterfaceAcoesVideo.php';

class Video implements InterfaceAcoesVideo
{
    protected $titulo;
    protected $avaliacao;
    protected $views;
    protected $curtidas;
    protected $reproduzindo;

     
    function __construct($titulo)
    {
        $this->setTitulo($titulo);
        $this->setAvaliacao(1);
        $this->setViews(1);
        $this->setCurtidas(0);
        $this->setReproduzindo(false);
    }



    function play()
    {
        echo '<p>Reproduzindo</p>';
        $this->setReproduzindo(true);
        $this->setViews($this->getViews() +1);
    }

    function pause()
    {
        echo '<p>Pausado</p>';
        $this->setReproduzindo(false);
    }

    function like()
    {
        echo '<p>Deu like!</p>';
        $this->setCurtidas($this->getCurtidas() + 1);
    }


    public function getTitulo()
    {
        return $this->titulo;
    }
 
    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;
        return $this;
    }

    public function getAvaliacao()
    {
        return $this->avaliacao;
    }

    public function setAvaliacao($avaliacao)
    {
        if ($this->views > 0) {
            $media = ($this->avaliacao + $avaliacao)/$this->views;
            $this->avaliacao = $media;
        } else {
            $this->avaliacao = $avaliacao;
        }
    }

    public function getViews()
    {
        return $this->views;
    }

    public function setViews($views)
    {
        $this->views = $views;
        return $this;
    }
 
    public function getReproduzindo()
    {
        return $this->reproduzindo;
    }

    public function setReproduzindo($reproduzindo)
    {
        $this->reproduzindo = $reproduzindo;
        return $this;
    }
 
    public function getCurtidas()
    {
        return $this->curtidas;
    }

    public function setCurtidas($curtidas)
    {
        $this->curtidas = $curtidas;
        return $this;
    }    
}
?>
