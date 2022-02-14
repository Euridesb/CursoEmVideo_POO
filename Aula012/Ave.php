<?php

require_once 'Animal.php';
class Ave extends Animal{
    private $corPena;
    
    public function alimentar() {
        echo '<p>Comendo coisa de aves</p>';
    }
    public function emetirSom() {
        echo '<p>Som de Ave</p>';
    }
    public function locomover() {
        echo '<p>Voando</p>';
    }
    public function fazerNinho() {
        echo '<p>Construindo ninho</p>';
    }
    public function getCorPena() {
        return $this->corPena;
    }

    public function setCorPena($corPena): void {
        $this->corPena = $corPena ;
    }


}
