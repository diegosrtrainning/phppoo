<?php

require 'conta.php';

$conta1 = new Conta(123, 11111, 1000, 500);
$conta2 = new Conta(456, 22222, 0, 0);

$conta1->transferir(100, $conta2);


?>