<?php

# Método sem permissão de sobrescrita (final)
require 'conta.php';
require 'contaPoupanca.php';

$c1 = new ContaPoupanca("123", "09098767", 1000); // Fatal error
echo $c1->getDetalhes();

?>