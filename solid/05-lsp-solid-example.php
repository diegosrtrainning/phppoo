<?php
/*Princípio da substituição de Liskov — 
Uma classe derivada deve ser substituível por sua classe base. */

class A 
{
    public function getNome()
    {
        echo 'Meu nome é A' . PHP_EOL;
    }
}

class B extends A 
{ 
    public function getNome()
    {
        echo 'Meu nome é B'. PHP_EOL;;
    }
}

$objeto1 = new A;
$objeto2 = new B;

function imprimeNome(A $objeto)
{
    return $objeto->getNome();
}

imprimeNome($objeto1); // Meu nome é A
imprimeNome($objeto2); // Meu nome é B

?>