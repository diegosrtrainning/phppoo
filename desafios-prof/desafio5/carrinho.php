<?php
require 'produto.php';

class Carrinho{
    private $totalItens;
    private $precoTotal;
    private $produtos;

    public function __construct(){
        $this->produtos = [];
    }
    
    public function adicionarProduto(Produto $produto){
        $this->totalItens++;
        $this->precoTotal+=$produto->getValor();

        array_push($this->produtos, $produto);
    }

    public function exibirTotaisTela(){
        echo "Total de itens {$this->totalItens}, valor total R$ {$this->precoTotal}";
    }
}

?>