<?php

/*
  2. OCP — Open-Closed Principle:Princípio Aberto-Fechado —
    Objetos ou entidades devem estar abertos para extensão, mas fechados para modificação,
    ou seja, quando novos comportamentos e recursos precisam ser adicionados 
    no software, devemos estender e não alterar o código fonte original.
 */
class ContratoClt
{
    public function salario()
    {
        //...
    }
}

class Estagio
{
    public function bolsaAuxilio()
    {
        //...
    }
}

class FolhaDePagamento
{
    protected $saldo;
    
    public function calcular($funcionario)
    {
        if ( $funcionario instanceof ContratoClt ) {
            $this->saldo = $funcionario->salario();
        } else if ( $funcionario instanceof Estagio) {
            $this->saldo = $funcionario->bolsaAuxilio();
        }
    }
}

?>