<?php

class ContaInvestimento extends Conta{
    public function __construct($documento)
    {
        // propriedade protected
        $this->documento = $documento;
    }

    public function getDocumentosNecessarios(){
        return "Conta Investimento: CPF, RG, CPF de um Fiador";
    }
}
?>