<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>documento</title>
    </head>
    <body> 
        <pre>
        <?php
          require_once 'pessoa.php'; 
          require_once 'Livro.php';
          $p[0] = new pessoa('Pedro', 22, 'M');
          $p[1] = new pessoa('Maria', 31, 'F');
          
          $l[0] = new Livro('PHP Básico', 'José da silva', 300, $p[0]);
          $l[1] = new Livro('POO com PHP', 'Maria de Souza', 500, $p[0]);
          $l[2] = new Livro('PHP Avançado','Ana Paula', 800, $p[1]);
          
          $l[0]->abrir();
          $l[0]->folhear(230);
          $l[0]->avancarPag();         
          $l[0]->detalhes();
          
          $l[1]->avancarPag();
          $l[1]->voltarPag();
          $l[1]->detalhes();
          
          $l[2]->folhear(150);
          $l[2]->voltarPag();
          
          $l[2]->detalhes();
        ?>
        </pre>
    </body>
</html>
