<?php

class Caneta {
    private $modelo;
    public $ponta;
    private $tampada;
    private $cor;

    public function __construct($modelo, $ponta, $cor) {
        $this->modelo = $modelo;
        $this->ponta = $ponta;
        $this->cor = $cor;
        $this->setTampada(True);
    }

    public function getModelo() {
        return $this->modelo;
    }

    public function getPonta() {
        return $this->ponta;
    }

    public function getTampada() {
        return $this->tampada;
    }

    public function getCor() {
        return $this->cor;
    }

    public function setModelo($modelo): void {
        $this->modelo = $modelo;
    }

    public function setPonta($ponta): void {
        $this->ponta = $ponta;
    }

    public function setTampada($tampada): void {
        $this->tampada = $tampada;
    }

    public function setCor($cor): void {
        $this->cor = $cor;
    }


}
