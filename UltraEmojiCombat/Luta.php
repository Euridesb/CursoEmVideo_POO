<?php
    require_once 'Lutador.php';
class Luta {
    //Atributos
    private $desafiado;
    private $desafiante;
    private $rounds;
    private $aprovadoa;
    //Metodos
    public function marcarLuta($l1, $l2) {
        if ($l1->getCategoria() === $l2->getCategoria()
                && ($l1 != $l2)){
            $this->aprovada = true;
            $this->desafiado = $l1;
            $this->desafiante = $l2;       
        }else{
                $this->aprovada = false;
                $this->desafiado = null;
                $this->desafiante = null;
        }
    }
    public function lutar() {
        if ($this->aprovada){
            $this->desafiado->apresentar();
            $this->desafiante->apresentar();
            $vencedor= rand(0,2);
            switch ($vencedor){
                case 0; // empate
                    echo '<p>Empatou: ';
                    $this->desafiado->empatarLuta();
                    $this->desafiante->empatarLuta();
                    break;
                case 1; 
                    //Desafiado Vence
                    echo '<p>'.$this->desafiado->getNome().' Venceu';
                    $this->desafiado->ganharLuta();
                    $this->desafiate->perderLuta();
                    break;
                case 2; 
                    // Desafiante Vence
                    echo '<p>'.$this->desafiante->getNome().' Venceu';
                    $this->desafiante->ganharLuta();
                    $this->desafiado->perderLuta();
                    break;
            }
        } else {
            echo '<p>A Luta não pode acontecer.</p>';
        }
    }
    //metodos Especiais
    public function getDesafiado() {
        return $this->desafiado;
    }

    public function getDesafiante() {
        return $this->desafiante;
    }

    public function getRounds() {
        return $this->rounds;
    }

    public function getAprovadoa() {
        return $this->aprovadoa;
    }

    public function setDesafiado($desafiado): void {
        $this->desafiado = $desafiado;
    }

    public function setDesafiante($desafiante): void {
        $this->desafiante = $desafiante;
    }

    public function setRounds($rounds): void {
        $this->rounds = $rounds;
    }

    public function setAprovadoa($aprovadoa): void {
        $this->aprovadoa = $aprovadoa;
    }


}
