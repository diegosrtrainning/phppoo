<?php

class Fabricante {
    private $nome;

    public function __construct()
    {        
    }

    public function getNome(){
        return $this->nome;
    }
    
    public function setNome($nome){
        $this->nome = $nome;
    }
}
?>