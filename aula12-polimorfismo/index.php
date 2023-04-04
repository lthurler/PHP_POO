<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>        
    </head>
    <body><pre>
        <?php
         
         require_once 'Mamifero.php';
         require_once 'Reptil.php';
         require_once 'Peixe.php';
         require_once 'Passaro.php';
         require_once 'Canguru.php';
         require_once 'Cachorro.php';
         require_once 'Cobra.php';
         require_once 'Tartaruga.php';
         require_once 'PeixeDourado.php';
         require_once 'Arara.php';

        
         $mamifero = new Mamifero();
         $Passaro = new Passaro();
         $canguru = new Canguru();
         $cachorro = new Cachorro();
         $tartaruga = new Tartaruga();


         $mamifero->locomover();
         $mamifero->emitirSom();
         $canguru->locomover();
         $canguru->emitirSom();
         $cachorro->locomover();
         $cachorro->emitirSom();
         $tartaruga->locomover();

       
        ?>
    </pre></body>
</html>
