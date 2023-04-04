<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>        
    </head>
    <body><pre>
        <?php
          
          require_once 'Aluno.php';
          require_once 'Bolsista.php';

          $aluno1 = new Aluno();
          $aluno1->setNome("Pedro");
          $aluno1->setMatricula(11111);
          $aluno1->setIdade(16);
          $aluno1->setSexo("M");
          $aluno1->setCurso("Informática");
          $aluno1->pagarMensalidade();
          
          print_r($aluno1);

          $bolsista1 = new Bolsista();
          $bolsista1->setMatricula(11112);
          $bolsista1->setNome('Thiago');
          $bolsista1->setBolsa(20);
          $bolsista1->setCurso("informática");
          $bolsista1->setIdade(18);
          $bolsista1->setSexo('M');
          $bolsista1->pagarMensalidade();
          
          print_r($bolsista1);

        ?>
    </pre></body>
</html>
