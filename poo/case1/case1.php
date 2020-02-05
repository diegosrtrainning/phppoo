<?php

#cLASSE 
require 'produto.php';

$p1 = new Produto();
$p1->setNome("aaaa");
echo $p1->getNome();

$p1 = new Produto();
$p1->setValor(300);
echo $p1->getValor();

?>