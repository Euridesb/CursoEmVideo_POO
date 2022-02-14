<?php


class ContaBanco {
    //Atributos
    public $numConta;
    protected $tipo;
    private $dono;
    private $Saldo;
    private $status;
    //Medotos
    public function abrirConta($t) {
        $this->setTipo($t);
        $this->setStatus(True);
        if ($t=="cc"){
            $this->setSaldo(50);
        }elseif ($t=="cp") {
             $this->setSaldo(150);
        }
    }
    public function fecharConta() {
        if($this->getSaldo()>0){
            echo '<p>Conta ainda tem dinheiro, não posso fecha-la.</p>';
        }elseif ($this->getSaldo()<0){
            echo '<p>Conta esta em débido, impossivel encerrar!</p>';
        }else{
            $this->setStatus(false);
            echo '<p> A conta de '.$this->getDono().' foi fechada com sucesso </p>';
        }
    }
    public function depositar($v) {
        if($this->getStatus()){
            $this->setSaldo($this->getSaldo() + $v);
            //$this->saldo=$this->saldo+$v;
            echo '<p>Deposito de R$'.$v.' na conta de '.$this->getDono().'</p>';
        } else {
            echo '<p>Conta fechada, não consigo depositar.</p>';
        }
    }
    public function sacar($v) {
        if($this->getStatus()){
            if($this->getSaldo()>=$v){ 
               //$this->saldo=$this->saldo-$v;
               $this->setSaldo($this->getSaldo() - $v);
               echo '<p>Saque de R$'.$v.' aurorizado na conta de '. $this->getDono().'</p>';
            }else{
                echo '<p>Saldo insuficiente para sacar.</p>';
            }
        } else {
            echo '<p>Não posso sacar de uma conta Fechada.</P>';
        }
    }
    public function pagarMensal() {
        if($this->getTipo()=="cc"){
            $v=12;
           
        } else if($this->getTipo()=="cp"){
            $v=20;
        }
        if ($this->getStatus()){
           $this->setSaldo($this->getSaldo()-$v);
           echo '<p>Mensalidade de '.$v.' na conta de '.$this->getDono().'</p>';
        } else {
            echo '<p>Problemas com a conta, Não posso cobrar.</p>'; 
        }
    }
    //Medotos epeciais
   function __construct(){
        $this->setSaldo(0);
        $this->setStatus(false);
        echo '<p>Conta criada com sucesso</p>';
    }
    public function getNumConta() {
        return $this->numConta;
    }

    public function getTipo() {
        return $this->tipo;
    }

    public function getDono() {
        return $this->dono;
    }

    public function getSaldo() {
        return $this->Saldo;
    }

    public function getStatus() {
        return $this->status;
    }

    public function setNumConta($numConta): void {
        $this->numConta = $numConta;
    }

    public function setTipo($tipo): void {
        $this->tipo = $tipo;
    }

    public function setDono($dono): void {
        $this->dono = $dono;
    }

    public function setSaldo($Saldo): void {
        $this->Saldo = $Saldo;
    }

    public function setStatus($status): void {
        $this->status = $status;
    }


}
