<?php

interface Aves
{
    public function setLocalizacao($longitude, $latitude);
    public function setAltitude($altitude);
    public function renderizar();
}

class Papagaio implements Aves
{
    public function setLocalizacao($longitude, $latitude)
    {
        //Faz alguma coisa
    }
    
    public function setAltitude($altitude)
    {
        //Faz alguma coisa   
    }
    
    public function renderizar()
    {
        //Faz alguma coisa
    }
}

class Pinguim implements Aves
{
    public function setLocalizacao($longitude, $latitude)
    {
        //Faz alguma coisa
    }
    
    // A Interface Aves está forçando a Classe Pinguim a implementar esse método.
    // Isso viola o príncipio ISP
    public function setAltitude($altitude)
    {
        //Não faz nada...  Pinguins são aves que não voam!
    }
    
    public function renderizar()
    {
        //Faz alguma coisa
    }
}
?>