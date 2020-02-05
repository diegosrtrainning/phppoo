<?php
class ContaPoupanca extends Conta{
    public function saque($valor){
        if($this->saldo >= $valor){
            $this->saldo -= $valor;
            echo "Saque de $valor | Saldo atual $this->saldo." . PHP_EOL;
        } else {
            echo "Saque de $valor não autorizado | Saldo atual $this->saldo" . PHP_EOL;
        }
    }
}

?>