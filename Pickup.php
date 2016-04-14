<?php

namespace Montadora;

use Montadora\Carro;

class Pickup extends Carro
{
    const ANO_FABRICACAO = 2017;
    
    static private $capacidade = 300;
    
    public function ligar() 
    {
        parent::ligar();
        
        echo "\n To ligado \n";
        
        echo self::$capacidade;
        
        //this propria classe já foi criado
        //self propria classe estatico não foi criado
        //static é parent + self
        //parent da classe pai para trás
    }
}