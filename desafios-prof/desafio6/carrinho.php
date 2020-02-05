<?php
require 'produto.php';

class Carrinho{
    private $totalItens;
    private $precoTotal;
    private $totalDescontos;
    private $produtos;

    public function __construct(){
        $this->produtos = [];
    }
    
    public function adicionarProduto(Produto $produto, int $quantidade){
        $this->totalItens += $quantidade;
        $this->precoTotal += $produto->getValor() * $quantidade;
        $this->totalDescontos += $produto->getValorDesconto() * $quantidade;

        array_push($this->produtos, ["produto"=>$produto, "quantidade"=> $quantidade]);
    }

    public function removerProduto(string $nome){        

        foreach ($this->produtos as $key => $item) 
        {            
            if($item["produto"]->getNome() == $nome){
                $this->totalItens-=$this->produtos[$key]["quantidade"];
                $this->precoTotal-=$this->produtos[$key]["produto"]->getValor() * $this->produtos[$key]["quantidade"];
                $this->totalDescontos-=$this->produtos[$key]["produto"]->getValorDesconto() * $this->produtos[$key]["quantidade"];

                unset($this->produtos[$key]);
                array_values($this->produtos);
            }            
        }        
    }

    public function exibirTotaisTela(){
        echo "Total de itens {$this->totalItens}, valor total R$ {$this->precoTotal}, total de descontos: R$ {$this->totalDescontos}<br>";
    }
}

?>