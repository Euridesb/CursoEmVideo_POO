<?php

require_once 'Animal.php';

class Reptil extends Animal{
    private $corEscama;

    public function alimentar() {
        echo '<p>Reptil comendo</p>';
    }
    public function emetirSom() {
        echo '<p>Som Reptil</p>';
    }
    public function locomover() {
        echo '<p>Rastejando</p>';
    }
    function getCorEscama() {
        return $this->corEscama;
    }

    function setCorEscama($corEscama): void {
        $this->corEscama = $corEscama;
    }




}    