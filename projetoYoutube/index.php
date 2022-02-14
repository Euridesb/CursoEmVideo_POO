<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
   
    <body>
         <pre>
            <?php
            require_once 'video.php';
            require_once 'acoesVideo.php';
            require_once 'visualizacao.php';
            require_once 'Gafanhoto.php';

            $v[0]=new video('Aula 01 de POO');
            $v[1]=new video('Aula 12 de PHP');
            $v[2]=new video('Aula 15 de HTML');

            $g[0]= new Gafanhoto('jubileu',22,'M','Juba');
            $g[1]= new Gafanhoto('creuza', 32, 'F', 1234);
            
            $vis[0] = new visualizacao($g[0], $v[2]);
            $vis[1] = new visualizacao($g[0], $v[1]);
            $vis[0]->avaliar();
            $vis[1]->avaliarPorc(85);

            print_r($g);
            print_r($v);
            print_r($vis);

            ?>
        </pre>
    </body>
    
</html>
