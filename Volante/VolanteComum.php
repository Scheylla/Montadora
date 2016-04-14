<?php

namespace Montadora\Volante;

use Montadora\Volante\InterfaceVolante;

require_once 'InterfaceVolante.php';

class VolanteComum implements InterfaceVolante
{
    private $direcao;
    
    public function girar($direcao) 
    {
        $this->direcao = $direcao;
    }

}
