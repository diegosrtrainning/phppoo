<?php

class Usuario{
    private $id; 
    public $nome;
    private $perfil;    

    public function __construct($id, $nome,$perfil){
        $this->id =$id;
        $this->nome =$nome;
        $this->perfil =$perfil;
    }

    public function getNome(){
        return $this->nome;
    }
        
    public function getId(){
        return $this->id;
    } 
    
    public function getPerfil(){
        return $this->perfil;
    } 
    
    public function getTipoAcesso(){
        $perfil = $this->getPerfil();
        $nomePerfil = $perfil->getNome();

        if($nomePerfil == "Administrador" || $nomePerfil == "Gerente"){
            return "Você tem acesso completo";
        }

        return "Você tem acesso básico";
    }
}

?>