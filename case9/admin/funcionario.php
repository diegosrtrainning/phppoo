<?php

namespace Admin{

    class Funcionario{

        private $nome;
        private $sobrenome;

        public function __set($atrib, $value){
            $this->$atrib= $value;
        }

        public function __get($atrib){
            return $this->$atrib;
        }

        public function getNomeCompleto(){
            return "{$this->nome} {$this->sobrenome}";
        }
    }

}

?>