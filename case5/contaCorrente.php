<?php

class ContaCorrente extends Conta{
    public function __construct($documento)
    {
        // propriedade protected
        $this->documento = $documento;
    }

    public function getDocumentosNecessarios(){
        return "Conta Corrente: CPF, RG, Comprovante de endereço";
    }
}
?>