<?php

class ContaPoupanca extends Conta{
    public function __construct($documento)
    {
        // propriedade protected
        $this->documento = $documento;
    }    
}
?>