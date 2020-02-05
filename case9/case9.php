<?php

#Uso de namespace
require 'admin/funcionario.php';
use Admin\Funcionario;

$f1 = new Funcionario();
$f1->nome = "Zé";
$f1->sobrenome = "Trovão";

echo $f1->getNomeCompleto();
?>