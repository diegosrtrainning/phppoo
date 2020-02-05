<?php
class ContaCorrente extends Conta{

    protected $limite;

    public function __construct($agencia, $conta, $saldo, $limite)
    {
        // Utilizando o construtor da classe pai (no caso classe Conta)
        parent::__construct($agencia, $conta, $saldo);
        
        $this->limite = $limite;
    }

    public function saque($valor){
        if(($this->saldo + $this->limite) >= $valor){
            $this->saldo -= $valor;
            echo "Saque de $valor | Saldo atual $this->saldo." . PHP_EOL;
        } else {
            echo "Saque de $valor não autorizado | Saldo atual $this->saldo | Limite: $this->limite" . PHP_EOL;
        }
    }
}

?>