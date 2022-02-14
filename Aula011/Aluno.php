<?php
require_once 'Pessoa.php';
class Aluno extends Pessoa {
    private $matricula;
    private $curso;
    public function pagarMensalidade() {
        echo '<p><br> Pagando Mesalidade do Aluno '. $this->nome.'<br>';       
    }
    function getMatricula() {
        return $this->matricula;
    }

    function getCurso() {
        return $this->curso;
    }

    function setMatricula($matricula): void {
        $this->matricula = $matricula;
    }

    function setCurso($curso): void {
        $this->curso = $curso;
    }


}
