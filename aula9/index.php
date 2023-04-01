<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>        
    </head>
    <body>
        <?php
           require_once 'Pessoa.php';
           require_once 'Livro.php';
           
           $pessoa = array();
           $pessoa[0] = new Pessoa("pedro", 22, "m");
           $pessoa[1] = new Pessoa("maria", 31, "f");
           
           $livro = array();
           $livro[0] = new Livro('PHP básico', 'José da Silva', 300, $pessoa[0]);
           $livro[1] = new Livro('POO com PHP', 'Maria de Souza', 500, $pessoa[0]);
           $livro[2] = new Livro('PHP avançado', 'Sandro de Oliveira', 400, $pessoa[1]);

           $livro[0]->detalhes();

        ?>
    </body>
</html>