<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <pre>
            <?php
            require_once 'Caneta.php';
            $c1=new Caneta("Bic", "Azul", 0.5);
            $c2=new Caneta("Bic", "Verde", 12.0);
            $c3=new Caneta("Meu", "Vermelho", 10.0);
            print_r($c1);
            print_r($c2);
            print_r($c3)
            ?>
        </pre>
    </body>
</html>
