<?php
    class Pessoa {
      private $nome;
      private $sobrenome;
      private $idade;
 
      public function __set($atrib, $value){
          $this->$atrib = $value;
      }
 
      public function __get($atrib){
          return $this->$atrib;
      }
    }
?>