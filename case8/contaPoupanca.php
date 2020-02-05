<?php

// Essa classe não poderá ser extendida (herdada)
final class ContaPoupanca extends Conta{
    public function saque($valor){
        if($this->saldo >= $valor){
            $this->saldo -= $valor;
            echo "Saque de $valor | Saldo atual $this->saldo." . PHP_EOL;
        } else {
            echo "Saque de $valor não autorizado | Saldo atual $this->saldo" . PHP_EOL;
        }
    }

    public function transferir(Conta $contaTransferencia)
    {
        throw new Exception('not implemented');
    }

    public function depositar($valor) // Fatal error
    {
        echo "tentei mudar";    
    }
}

?>