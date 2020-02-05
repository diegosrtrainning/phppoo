<?php

#Setando os valores de um objeto (atenção)
require 'produto.php';

$p1 = new Produto();
$p1->setNome("Iphone");

$f1 = new Fabricante();
$f1->setNome("Apple");

$p1->setFabricante($f1);

echo "Fabricante (1): ", $p1->getFabricante()->getNome() . PHP_EOL;


$f2 = $p1->getFabricante();
$f2->setNome("Outro");
echo "Fabricante (2): ", $p1->getFabricante()->getNome() . PHP_EOL;

$f1->setNome("Zend");

// Repare no valor da Fabrica
echo "Fabricante (3): ", $p1->getFabricante()->getNome() . PHP_EOL;
?>