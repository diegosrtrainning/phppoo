<?php

require 'carrinho.php';

$p1 = new Produto("Caderno", 10);
$p2 = new Produto("Livro", 20);
$p3 = new Produto("Caneta", 5);

$carrinho = new Carrinho();
$carrinho->adicionarProduto($p1);
$carrinho->adicionarProduto($p2);
$carrinho->adicionarProduto($p3);

$carrinho->exibirTotaisTela();




?>