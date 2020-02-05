<?php
   Interface Animal {
      public function dormir();
      public function acordar();
   }
   class Mamifero implements Animal{
        public function dormir(){
            echo "dormir" . PHP_EOL;
        }

        public function acordar(){
            echo "acordar" . PHP_EOL;
        }
   }
   $obj = new Mamifero;
   $obj->acordar();
   $obj->dormir();
?>