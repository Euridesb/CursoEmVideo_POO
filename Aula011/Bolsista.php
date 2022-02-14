<?php
require_once 'Aluno.php';
class Bolsista extends Aluno{
    private $bolsa;
    public function renovarBolsa(){
        echo '<p>Bolsa Renovada</p><br>';
    }
    public function pagarMensalidade() {
        echo '<p><br>'.$this->nome.'é Bolsista então paga com desconto.</p>';
    }
            function getBolsa() {
        return $this->bolsa;
    }

    function setBolsa($bolsa): void {
        $this->bolsa = $bolsa;
    }


}
