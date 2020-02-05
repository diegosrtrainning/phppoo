<?php

#POLIMORFISMO (SOBRECARCA)

require 'conta.php';
require 'contaCorrente.php';
require 'contaInvestimento.php';
require 'contaPoupanca.php';
include 'contaPoupanca22.php';

$c1 = new ContaCorrente("1234567890");
$c2 = new ContaInvestimento("11111111111");
$c3 = new ContaPoupanca("2222222");

documentosNecessarios($c1);
documentosNecessarios($c2);
documentosNecessarios($c3);

function documentosNecessarios(Conta $conta){
    echo $conta->getDocumentosNecessarios() . PHP_EOL;
}

?>