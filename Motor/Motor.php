<?php

namespace Montadora\Motor;

/**
 * Modelo base do motor
 */

abstract class Motor
{
    //private $cilindrada = 1000;
    private $combustivel = "Gasolina";
    protected $aceleracao = 0;
    private $ligado = false;
    
    //protected só classe filha pode acessar
    
    /**
     * Liga ou desliga o motor
     * @return bool
     */
    
    public function ligar()
    {
        $this->ligado = !$this->ligado;
        return $this->ligado;
    }
    
    /**
     * Acelera o motor
     * @param int $potencia
     * @return int Combustivel gasto
     */
    
    public function acelerar($potencia){
        $this->aceleracao = $potencia;
        $gasto = $potencia * $this->getCilindrada();
        return $gasto/1000; 
    }
    
    abstract public function getCilindrada();
    
}