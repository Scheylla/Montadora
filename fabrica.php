<pre>
<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);

use Montadora\Motor\Motor1600;
use Montadora\Motor\MotorTurbo;

use Montadora\Volante\VolanteComum as Volante;

require_once './Carro.php';
require_once './Pickup.php';
require_once './Motor.php';
require_once './Motor1000.php';
require_once './Motor1600.php';
require_once './MotorTurbo.php';
require_once './VolanteComum.php';

$motor1 = new Montadora\Motor\Motor1000;
$motor2 = new Motor1600();
$motort= new MotorTurbo();

$volante = new Volante();

$carro1 = new Carro($motort, $volante);

$carro3 = clone $carro1;

//novo numero do elemento 
//alterar carro3 não altera carro1

try
{
    $carro1->abastecer(20);
    $carro1->ligar();
    $carro1->acelerar(30);
} 

catch (Exception $e)
{
    echo "\n".$e->getMessage()."\n";
}

var_dump($motor1, $motor2);

if($mootor1 == $motor2)
{
    echo "Sao iguais";
}else
{
    echo "Sao diferentes";
}