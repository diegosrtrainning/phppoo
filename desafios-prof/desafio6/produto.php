<?php

class Produto{
    private $nome;
    private $valor;
    private $valorDesconto;
    
    public function __construct($nome, $valor, $valorDesconto){
        $this->nome = $nome;
        $this->valor = $valor;
        $this->valorDesconto = $valorDesconto;
    }

    public function getNome(){
        return $this->nome;
    }

    public function getValor(){
        return $this->valor;
    }

    public function getValorDesconto(){
        return $this->valorDesconto;
    }
}

?>