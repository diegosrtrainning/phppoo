<?php

require 'conta.php';
require 'contaPoupanca.php';

$c1 = new ContaPoupanca("123", "09098767", 1000);
$c1->depositar(1500);
$c1->saque(1000);
$c1->saque(1000);
$c1->saque(1000);

?>