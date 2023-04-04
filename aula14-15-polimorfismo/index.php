<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>        
    </head>
    <body><pre>
        <?php
          
          require_once 'Video.php';
          require_once 'Gafanhoto.php';
          require_once 'Visualizacao.php';
          
          $videos = array();
          $gafanhotos = array();
          $visualizacoes = array();

          $gafanhotos[0] = new Gafanhoto('Donnie',24,'M','gafanhoto@gmail.com');
          $gafanhotos[1] = new Gafanhoto('Wanda', 19, 'F', 'WW@gmail.com');

          $videos[0] = new Video('vtt');
          $videos[1] = new Video('POO');

          $videos[0]->play();
          $videos[1]->play();
          $videos[0]->like();

          $visualizacoes[0] = new Visualizacao($gafanhotos[0], $videos[0]);
          $visualizacoes[1] = new Visualizacao($gafanhotos[1], $videos[1]);
          $visualizacoes[2] = new Visualizacao($gafanhotos[0], $videos[1]);

          $visualizacoes[0]->avaliacao();
          $visualizacoes[1]->avaliacaoPorcentagem(90);
          $visualizacoes[2]->avaliacaoNota(8);

          print_r($videos[0]);
          print_r($gafanhotos[0]);
          print_r($visualizacoes[0]);
          print_r($visualizacoes[1]);
          print_r($visualizacoes[2]);
        ?>
    </pre></body>
</html>
