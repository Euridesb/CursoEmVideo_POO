<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <pre>
            <?php
           require_once 'ContaBanco.php';
                $p1 = new ContaBanco();
                $p2 = new ContaBanco();
                $p1->abrirConta("cc");
                $p1->setDono("Jubileu");
                $p1->setNumConta(111);
                $p2->abrirConta("cp");
                $p2->setNumConta(222);
                $p2->setDono("Creusa");

                $p1->depositar(300);
                $p2->depositar(500);
                $p2->sacar(20);
                $p1->sacar(50);
                
                $p1->pagarMensal();
                $p2->pagarMensal();
                
               
                
                $p1->sacar(288);
                $p2->sacar(610);
                
                $p1->fecharConta();
                $p2->fecharConta();

                print_r($p1);
                print_r($p2);
            ?>
        </pre>
    </body>
</html>
