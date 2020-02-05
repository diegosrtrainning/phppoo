<?php

class Pessoa{

    private $id;
    protected $documento;
    public $nome;

    public function setId(int $id){
        $this->id = $id;
    }
    
    public function getId(){
        return $this->id;
    }

    public function getDocumento(){
        return $this->documento;
    }
}
?>