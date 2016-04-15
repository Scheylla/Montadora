<?php

$var = function ($nome)
{
    return "Oi {$nome}";
};

echo $var("Edir");

var_dump($var);