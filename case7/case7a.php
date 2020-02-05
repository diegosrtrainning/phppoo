<?php

#Classe abstrata
require 'conta.php';

$c1 = new Conta("123", "09098767", 1000); // Fatal error
echo $c1->getDetalhes();

?>