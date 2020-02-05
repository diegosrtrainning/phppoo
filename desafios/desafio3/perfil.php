<?php

class Perfil{

    private $id;
    private $nome;    

    public function __construct($id, $nome){
        $this->id =$id;
        $this->nome =$nome;        
    }
    
    public function getNome(){
        return $this->nome;
    }
        
    public function getId(){
        return $this->id;
    }       
}
?>