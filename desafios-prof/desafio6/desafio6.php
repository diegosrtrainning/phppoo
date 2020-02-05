<?php

require 'carrinho.php';

$p1 = new Produto("Caderno", 2, 1);
$p2 = new Produto("Livro", 2, 1);
$p3 = new Produto("Caneta", 2, 1);

$carrinho = new Carrinho();
$carrinho->adicionarProduto($p1, 2);
$carrinho->adicionarProduto($p2, 2);
$carrinho->adicionarProduto($p3, 2);

$carrinho->exibirTotaisTela();
$carrinho->removerProduto("Caderno");
$carrinho->exibirTotaisTela();





?>