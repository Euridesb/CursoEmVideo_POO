<?php

require_once 'Animal.php';
class Peixe extends Animal {
    private $corEscama;
    
    public function alimentar(){
        echo '<p>Comendo coisas de peixe</P>';
    }
    public function emetirSom() {
        echo '<p>Peixe não emite som</P>';
    }
    public function locomover(){
        echo '<p>Nadando</P>';
    }
    function soltarBolha(){
        echo '<p>Soltou uma Bolha</P>';
    }

    public function getCorEscama() {
        return $this->corEscama;
    }

    public function setCorEscama($corEscama): void {
        $this->corEscama = $corEscama;
    }


}
