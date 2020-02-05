<?php

#__GET e __SET (Métodos mágicos)
require 'pessoa.php';

$p1 = new Pessoa();
$p1->nome = "Anna Raio";

var_dump($p1);

echo $p1->nome;

?>