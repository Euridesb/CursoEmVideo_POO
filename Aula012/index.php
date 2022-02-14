<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        require_once 'Mamifero.php';
        require_once 'Reptil.php';
        require_once 'Peixe.php';
        require_once 'Ave.php';
        require_once 'Ganguru.php';
        require_once 'Cachorro.php';
        require_once 'Cobra.php';
        require_once 'Tartaruga.php';
        require_once 'GoldFish.php';
        require_once 'Arara.php';
        
        $m = new Mamifero();
        $a = new Ave();
        $r = new Reptil();
        $g = new Ganguru();
        $K = new Cachorro();
        $t = new Tartaruga();
        
        $m->locomover();
        $g->locomover();
        $K->locomover();
        $t->alimentar();
        $t->locomover();
        
        $m->emetirSom();
        $K->emetirSom();
        $a->emetirSom();
       
        ?>
    </body>
</html>
