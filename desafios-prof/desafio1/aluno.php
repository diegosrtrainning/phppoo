<?php

class Aluno{

    private $nome;
    private $idade;
    protected $notas;

    public function __construct($notas)
    {
        $this->notas = $notas;
    }

    public function getNome(){
        return $this->nome;
    }
    
    public function setNome($nome){
        $this->nome = $nome;
    }
    
    public function getIdade(){
        return $this->idade;
    }
    
    public function setIdade(int $idade){
        $this->idade = $idade;
    }    

    public function getAprovacao(){
        $media =  array_sum($this->notas) / 4;
        if($media > 5){
            return "Aprovado";
        } 
        return "Reprovado";
    }
}
?>