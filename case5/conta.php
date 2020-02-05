<?php

class Conta{

    private $id;
    protected $numero;
    protected $documento;
    protected $responsaveLegal;

    public function setId(int $id){
        $this->id = $id;
    }
    
    public function getId(){
        return $this->id;
    }

    public function getDocumento(){
        return $this->documento;
    }

    public function getDocumentosNecessarios(){

        return "CPF e RG";
    }
}
?>