<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>        
    </head>
    <body><pre>
        <?php
          
          require_once 'Pessoa.php';
          require_once 'Aluno.php';
          require_once 'Professor.php';
          require_once 'Funcionario.php';

          $pessoa = array();
          $pessoa[0] = new Pessoa();
          $pessoa[1] = new Aluno();
          $pessoa[2] = new Professor();
          $pessoa[3] = new Funcionario();

          $pessoa[0]->setNome('Pedro');
          $pessoa[1]->setNome('Maria');
          $pessoa[2]->setNome('João');
          $pessoa[3]->setNome('Tatiana');          
          
          $pessoa[1]->setSexo('M');
          $pessoa[3]->setSexo('F');  
          $pessoa[1]->setCurso('Informática');
          $pessoa[2]->setSalario(2500.20);
          $pessoa[3]->setSetor('Estoque');

          $pessoa[2]->receberAumento(770.96);
          $pessoa[3]->mudarTrabalho();
          $pessoa[1]->cancelarMatricula();
          
          print_r($pessoa[0]);
          print_r($pessoa[1]);
          print_r($pessoa[2]);
          print_r($pessoa[3]);

          ?>
    </pre></body>
</html>
