<?php

require_once 'Lobo.php';


class Cachorro extends Lobo
{
    
    function emitirSom()
    {
        echo '<p>Latindo</p>';
    }
    
    function reagirFrase($frase)
    {
        if($frase == 'toma comida' || $frase == 'ola!')
        {
            echo '<p>Abanar e latir</p>';

        } else
        {
            echo '<p>Rosnar</p>';
        }
    }

    function reagirHora($hora, $minuto)
    {
        if($hora<12)
        {
            echo '<p>Abanar</p>';

        } elseif ($hora >= 18)
        {
            echo '<p>Ignorar</p>';

        } else
        {
            echo '<p>Abanar e Latir</p>';
        }
    }

    function reagirDono($dono)
    {
        if($dono == true)
        {
            echo '<p>Abanar</p>';

        } else
        {
            echo '<p>Rosnar e latir</p>';
        }
    }

    function reagirIdadePeso($idade, $peso)
    {
        if ($idade < 5)
        {
            if ($peso < 10)
            {
                echo '<p>Abanar</p>';

            } else
            {
                echo '<p>Latir</p>';

            }
        } else
        {
            if ($peso < 10)
            {
                echo '<p>Rosnar</p>';

            } else
            {
                echo '<p>Ignorar</p>';

            }   
        }
    }
}
?>
