<?php

require_once 'Pessoa.php';

class Aluno extends Pessoa {
    private $Matr;
    private $curso;
    
    public function cancelarMatr() {
        echo '<p>A matricula será cancelada</p>';      
    }
    public function getMatr() {
        return $this->Matr;
    }

    public function getCurso() {
        return $this->curso;
    }

    public function setMatr($Matr): void {
        $this->Matr = $Matr;
    }

    public function setCurso($curso): void {
        $this->curso = $curso;
    }


}
