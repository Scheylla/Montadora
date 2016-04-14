<?php

namespace Montadora\Motor;

use Montadora\Motor\Motor;

class MotorTurbo extends Motor
{
    /**
     * 
     * @param type $potencia
     * @return type
     */
    
    public function acelerar($potencia) {
        
        $this->aceleracao = $potencia * 2;
        
        $gasto = $potencia * $this-> getCilindrada();
        return $gasto/1000;
    }

    public function getCilindrada() 
    {
        return 1400;
    }

}
