<?php 

require 'produto.php';

$produto = new Produto("Bolacha", 5, 2);
$total = $produto->getTotal();

echo $total;

?>