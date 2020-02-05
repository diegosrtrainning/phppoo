<?php

# Método abstrato não implementado
require 'conta.php';
require 'contaCorrente.php';

$c1 = new ContaCorrente("123", "09098767", 1000, 100); // Fatal error
echo $c1->getDetalhes();

?>