<?php

#CLASSE ABSTRATA E FINAL
require 'conta.php';
require 'contaCorrente.php';

$c1 = new ContaCorrente("123", "09098767", 1000, 1000);
$c1->depositar(10);
$c1->saque(1000);
$c1->saque(1000);
$c1->saque(11);

?>