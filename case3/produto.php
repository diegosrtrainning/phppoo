<?php

require 'fabricante.php';

class Produto {
    private $nome;
    private $valor;
    private $fabricante;

    public function __construct($nome, float $valor, Fabricante $fabricante)
    {   
        $this->nome = $nome;     
        $this->valor = $valor;
        $this->fabricante = $fabricante;
    }

    public function getNome(){
        return $this->nome;
    }        
    
    public function getValor(){
        return $this->valor;
    }    

    public function getFabricante(){
        return $this->fabricante;
    }    
}
?>