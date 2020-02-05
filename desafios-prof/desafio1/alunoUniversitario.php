<?php

class AlunoUniversitario extends Aluno{  
    public function getAprovacao(){
        $media =  array_sum($this->notas) / 5;
        if($media > 5){
            return "Aprovado";
        } 
        return "Reprovado";
    }
}
?>