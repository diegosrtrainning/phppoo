<?php

// Essa classe não poderá ser instânciada, somente pode ser usada como herança para outras
abstract class Conta{
    protected $agencia;
    protected $conta;
    protected $saldo;

    public function __construct($agencia, $conta, $saldo){
        $this->agencia = $agencia;
        $this->conta = $conta;
        $this->saldo = $saldo;
    }

    public function getDetalhes(){
        return "Agência: {$this->agencia} | Conta: {$this->conta} | Saldo: {$this->saldo}";
    }
    
    public final function depositar($valor){
        $this->saldo += $valor;
        echo "Deposito de $valor | Saldo atual $this->saldo." . PHP_EOL;
    }
}

?>