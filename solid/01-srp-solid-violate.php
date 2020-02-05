<?php

/*
A classe Order viola o SRP porque realiza 3 tipos distintos de tarefas. 
Além de lidar com as informações do pedido, ela também é responsável 
pela exibição e manipulação dos dados. 
Lembre-se, o princípio da responsabilidade única preza que uma classe 
deve ter um, e somente um, motivo para mudar
*/
class Order
{
    public function calculateTotalSum(){/*...*/}
    public function getItems(){/*...*/}
    public function getItemCount(){/*...*/}
    public function addItem($item){/*...*/}
    public function deleteItem($item){/*...*/}

    public function printOrder(){/*...*/}
    public function showOrder(){/*...*/}

    public function load(){/*...*/}
    public function save(){/*...*/}
    public function update(){/*...*/}
    public function delete(){/*...*/}
}
?>