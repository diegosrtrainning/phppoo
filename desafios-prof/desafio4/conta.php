<?php

class Conta{
    private $agencia;
    private $numero;
    private $saldo;
    private $limite;

    public function __construct($agencia, $numero, $saldo, $limite){
        $this->agencia = $agencia;
        $this->numero = $numero;
        $this->saldo = $saldo;
        $this->limite = $limite;
    }

    public function debitar(float $valor){
        $this->saldo -= $valor;
    }

    public function creditar(float $valor){
        $this->saldo += $valor;
    }
    
    public function getSaldoTotal(){
        return $this->saldo + $this->limite;
    }

    public function exibirSaldoTela(){
        echo "Saldo atual da conta $this->numero é: {$this->getSaldoTotal()}<br>";
    }

    public function transferir(float $valor, Conta $contaFavorecida){
                
        $saldoAposDebito = $this->getSaldoTotal() - $valor;

        if($saldoAposDebito >= 0){
            $this->exibirSaldoTela();
            $contaFavorecida->exibirSaldoTela();

            $this->debitar($valor);
            $contaFavorecida->creditar($valor);

            $this->exibirSaldoTela();
            $contaFavorecida->exibirSaldoTela();
        }
    }
}

?>