<?php
require 'fabricante.php';

#GETTERS e SETTERS

class Produto {
    private $nome;
        
    private $fabricante;

    public function __construct()
    {        
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
    
    public function setValor(float $valor){
        $this->valor = $valor;
    }

    public function getFabricante(){
        return $this->fabricante;
    }
    
    public function setFabricante(Fabricante $fabricante){
        $this->fabricante = $fabricante;
    }
}
?>