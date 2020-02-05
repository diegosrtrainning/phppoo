<?php

class Produto{

    private $nome;
    private $valor;
    protected $desconto;

    public function __construct($nome, $valor, $desconto)
    {
        $this->nome = $nome;
        $this->valor = $valor;
        $this->desconto = $desconto;

    }

    public function getNome(){
        return $this->nome;
    }
    
    public function setNome($nome){
        $this->nome = $nome;
    }
    
    public function getValor(){
        return $this->valor;
    }
    
    public function setValor(int $valor){
        $this->valor = $valor;
    }    

    public function getTotal(){
        $total =  $this->valor - $this->desconto;
        return $total;
    }
}
?>