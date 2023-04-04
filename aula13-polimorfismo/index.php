<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>        
    </head>
    <body><pre>
        <?php
          
          require_once 'Mamifero.php';
          require_once 'Lobo.php';
          require_once 'Cachorro.php';
          
          $cachorro = new Cachorro();
          $cachorro->reagirFrase("ola!");  
          $cachorro->reagirFrase('Vai apanhar!');
          $cachorro->reagirHora(11, 45);  
          $cachorro->reagirHora(21, 00);
          $cachorro->reagirDono(true);  
          $cachorro->reagirDono(false);
          $cachorro->reagirIdadePeso(2, 12.5);  
          $cachorro->reagirIdadePeso(17, 4.5);  
        ?>
    </pre></body>
</html>
